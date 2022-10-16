<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginSecurity;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $google2fa_enable = LoginSecurity::where('user_id', auth()->user()->id)->first();
        if (!empty($google2fa_enable)) {
            $google2fa_enable->google2fa_enable;
            return view('home', compact('google2fa_enable'));
        }else{
            $google2fa_enable = 0;
            return view('home', compact('google2fa_enable'));
        }
    }
}
