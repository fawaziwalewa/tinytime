<?php

use Illuminate\Support\Str;
use App\Models\GenerateLink;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
// use Symfony\Component\HttpFoundation\Request;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('thanks-giving');
    // return view('ramadan');
})->name("landingPage");

Auth::routes();

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard')->middleware(['2fa']);

Route::middleware(['2fa', 'auth'])->group(function () {
    Route::get('/history', function () {
        return view("history");
    })->name('history');

    Route::get('/profile', function () {

    })->name('profile');

    Route::get('/upgrade', function () {

    })->name('upgrade');
});

Route::post('/custom-timer', function(Request $request){
    $request->validate([
        'name' => 'required|min:4',
        'date' => 'required|date',
        'hour' => 'required|integer|min:0|max:60',
        'minute' => 'required|integer|min:0|max:60',
        'second' => 'required|integer|min:0|max:60',
        'timertype' => 'required|in:0,1',
    ]);

    $generate_link = new GenerateLink;
    $generate_link->date = $request->date;
    $generate_link->hour = $request->hour;
    $generate_link->minute = $request->minute;
    $generate_link->second = $request->second;
    $generate_link->timer_type = $request->timertype;
    $generate_link->link_id = Str::random(15);
    $generate_link->name = $request->name;
    $generate_link->description = $request->description;
    $generate_link->save();

    return response()->json(['link' => $generate_link->link_id ]);

})->name('customUrl');

Route::get('/custom-timer/{link_id}', function(Request $request){
    $link_id = GenerateLink::where('link_id', $request->link_id)->first();
    if (empty($link_id)) {
        return redirect('/')->with('invalid_link', 'The link is invalid.');
    }
    $endDate = Carbon::parse($link_id->date)->isoFormat('MMMM D, YYYY');
    $hour = $link_id->hour;
    $minute = $link_id->minute;
    $second = $link_id->second;
    $timer_type = $link_id->timer_type;
    $created_at = $link_id->created_at;
    $name = $link_id->name;
    $description = $link_id->description;
    // August 27, 2022 7:45:58
    $date = "$endDate $hour:$minute:$second";
    return view('module.index', compact('date', 'timer_type', 'created_at', 'name', 'description'));
});


// Route::get('/google', [App\Http\Controllers\GoogleSheetController::class, 'googlesheet'])->name('googlesheet');

Route::get('/adhsfaldhflasdjajjYGSKllsaalksk', [App\Http\Controllers\SubscribersController::class, 'index']);
Route::post('/adhsfaldhflasdjajjYGSKllsaalksk', [App\Http\Controllers\SubscribersController::class, 'index']);
Route::post('/adhsfaldhflasdjajjYGSKllsaalksk/export', [App\Http\Controllers\SubscribersController::class, 'export'])->name('export');
Route::post('/subscribers', [App\Http\Controllers\SubscribersController::class, 'sendMail'])->name('subscribers');
Route::post('/subscribers/{id}', [App\Http\Controllers\SubscribersController::class, 'subscribe'])->name('subscribe');
Route::get('/unsubscribe/{hash}', [App\Http\Controllers\SubscribersController::class, 'unsubscribe'])->name('unsubscribe');


Route::get('/terms-of-services', function(){
    return view('terms-of-services');
})->name('terms');

Route::get('/privacy-policy', function(){
    return view('privacy-policy');
})->name('privacy');


/* Socialite */

// Google Login
Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('google.login');

Route::get('/auth/google/callback', function () {
    $googleUser = Socialite::driver('google')->user();

    $user = User::updateOrCreate([
        'email' => $googleUser->email,
    ], [
        'name' => $googleUser->name,
        'email' => $googleUser->email,
        'password' =>  Str::random(40),
        'email_verified_at' =>  now(),
    ]);

    Auth::login($user);

    return redirect('/dashboard');
});

// Facebook Login
Route::get('/auth/facebook/redirect', function () {
    return Socialite::driver('facebook')->redirect();
})->name('facebook.login');

Route::get('/auth/facebook/callback', function () {
    $facebookUser = Socialite::driver('facebook')->user();

    $user = User::updateOrCreate([
        'email' => $facebookUser->email,
    ], [
        'name' => $facebookUser->name,
        'email' => $facebookUser->email,
        'password' =>  Str::random(40),
        'email_verified_at' => now(),
    ]);

    Auth::login($user);

    return redirect('/dashboard');
});

// Twitter Login
Route::get('/auth/twitter/redirect', function () {
    return Socialite::driver('twitter')->redirect();
})->name('twitter.login');

Route::get('/auth/twitter/callback', function () {
    $twitterUser = Socialite::driver('twitter')->user();

    $user = User::updateOrCreate([
        'email' => $twitterUser->email,
    ], [
        'name' => $twitterUser->name,
        'email' => $twitterUser->email,
        'password' =>  Str::random(40),
        'email_verified_at' => now(),
    ]);

    Auth::login($user);

    return redirect('/dashboard');
});

// Twitch Login
Route::get('/auth/twitch/redirect', function () {
    return Socialite::driver('twitch')->redirect();
})->name('twitch.login');

Route::get('/auth/twitch/callback', function () {
    $twitchUser = Socialite::driver('twitch')->user();

    $user = User::updateOrCreate([
        'email' => $twitchUser->email,
    ], [
        'name' => $twitchUser->name,
        'email' => $twitchUser->email,
        'password' =>  Str::random(40),
        'email_verified_at' => now(),
    ]);

    Auth::login($user);

    return redirect('/dashboard');
});

/* Google 2FA */
Route::group(['prefix'=>'2fa'], function(){
    Route::get('/',[App\Http\Controllers\LoginSecurityController::class, 'show2faForm']);
    Route::post('/generateSecret',[App\Http\Controllers\LoginSecurityController::class, 'generate2faSecret'])->name('generate2faSecret');
    Route::post('/enable2fa',[App\Http\Controllers\LoginSecurityController::class, 'enable2fa'])->name('enable2fa');
    Route::post('/disable2fa',[App\Http\Controllers\LoginSecurityController::class, 'disable2fa'])->name('disable2fa');

    // 2fa middleware
    Route::post('/2faVerify', function () {
        return redirect('/dashboard');
    })->name('2faVerify')->middleware('2fa');
});

// Time Module

// Route::get('/module/{id}', function(){
//     return view('module.index');
// });
Route::get('/module/{link_id}', function(Request $request){
    $link_id = GenerateLink::where('link_id', $request->link_id)->first();
    if (empty($link_id)) {
        return redirect('/')->with('invalid_link', 'The link is invalid.');
    }
    $endDate = Carbon::parse($link_id->date)->isoFormat('MMMM D, YYYY');
    $hour = $link_id->hour;
    $minute = $link_id->minute;
    $second = $link_id->second;
    $timer_type = $link_id->timer_type;
    $created_at = $link_id->created_at;
    // August 27, 2022 7:45:58
    $date = "$endDate $hour:$minute:$second";
    return view('module.index', compact('date', 'timer_type', 'created_at'));
});



// Force redirect

// Route::get("/login", function(){
//     return redirect()->route("landingPage");
// })->name("login");

// Route::get("/register", function(){
//     return redirect()->route("landingPage");
// })->name("register");
