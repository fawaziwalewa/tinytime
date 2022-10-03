<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\Subscribers;
use App\Mail\Subscription;
use App\Models\Subscribers as SubscribersModel;
use App\Models\Unsubscribe;
use App\Models\subscribersPassword;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Exports\SubscribersExport;
use Maatwebsite\Excel\Facades\Excel;

use Symfony\Component\HttpFoundation\Response;

class SubscribersController extends Controller
{
    public function index(Request $request){
        $subscribers = SubscribersModel::paginate(10);
        $psw = subscribersPassword::find(1);
        // dd($psw->trials);
        if(isset($request->password)){
            if ($psw->trials > 4) {
                return redirect()->back()->withErrors(['password' => ['You have reached the maximum login attemps, the account is locked.']]);
            }
            if (Hash::check($request->password, $psw->password)) {
                $psw->update([
                    'trials' => 0,
                ]);
                return view('subscribers', compact('subscribers'));
            }

            $psw->update([
                'trials' => $psw->trials + 1,
            ]);

            return redirect()->back()->withErrors(['password' => ['Invalid Password.']]);
        }
        return view('password');
    }

    public function sendMail(Request $request){
        $request->validate([
            'email' => ['required', 'string', 'email:rfc,dns', 'max:255'],
        ],
        [
            'required'  => 'The email field is required.',
            'unique'    => 'Unable to add email, the email has already subscribed.'
        ]);
        $check = SubscribersModel::where('email', $request->email)->first();
        // dd($check->cta);
        if (isset($check)) {
            // dd($check->cta);
            if ($check->cta == 1) {
                abort(503, "Unable to add email, the email has already subscribed.");
                // return back()->withError('error', 'Unable to add email, the email has already subscribed.');
            }
            $check->update([
                'cta' => 1,
            ]);
            return "success";
        }
        $admin_email = 'wizardalani@gmail.com';
        $sus = new SubscribersModel();
        $sus->email = $request->email;
        $sus->cta = 1;
        $sus->save();

        Mail::to($admin_email)->send(new Subscribers());
        
        $unsubscribe = new Unsubscribe();
        $unsubscribe->email = $request->email;
        $unsubscribe->hash = Str::random(15);
        $unsubscribe->save();
        $url = config('app.url')."unsubscribe/".$unsubscribe->hash;
        
        Mail::to($request->email)->send(new Subscription($url));
        return "success";
        //redirect()->back()->with('success', 'You\'ve successfully subscribed, we will let you know when new features are added.');
    }

    public function subscribe($id){
        
        $subs = SubscribersModel::find($id);
        if($subs->cta == 0){
            $subs->update([
                'cta' => 1,
            ]);
        }else{
            $subs->update([
                'cta' => 0,
            ]);
        }
        return redirect()->back()->with('success', $subs->email);
    }

    public function unsubscribe($hash){
        $check = Unsubscribe::where('hash', $hash)->first();
        
        if (empty($check)) {
            return redirect('/')->with('error', 'Invalid Link!');
        }

        SubscribersModel::where('email', $check->email)->delete();
        
        $check->delete();
        
        return redirect('/')->with('success', 'You\'ve successfully unsubscribed on TinyTime.');
    }

    public function export(Request $request) 
    {
        return Excel::download(new SubscribersExport , 'subscribers.xlsx');
    }
}
