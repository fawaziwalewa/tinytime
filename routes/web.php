<?php

use Illuminate\Support\Str;
use App\Models\GenerateLink;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
    // August 27, 2022 7:45:58
    $date = "$endDate $hour:$minute:$second";
    return view('custom_timer', compact('date', 'timer_type', 'created_at'));
    
})->name('customUrl');

Route::post('/custom-timer', function(Request $request){

    $request->validate([
        'date' => 'required|date',
        'hour' => 'required|integer|min:0|max:60',
        'minute' => 'required|integer|min:0|max:60',
        'second' => 'required|integer|min:0|max:60',
        'timertype' => 'required|integer|min:0|max:1',
    ]);

    $generate_link = new GenerateLink;
    $generate_link->date = $request->date;
    $generate_link->hour = $request->hour;
    $generate_link->minute = $request->minute;
    $generate_link->second = $request->second;
    $generate_link->timer_type = $request->timertype;
    $generate_link->link_id = Str::random(15);
    $generate_link->save();
    
    return response()->json(['link' => $generate_link->link_id ]);
    
})->name('customUrl');


// Route::get('/google', [App\Http\Controllers\GoogleSheetController::class, 'googlesheet'])->name('googlesheet');

Route::get('/adhsfaldhflasdjajjYGSKllsaalksk', [App\Http\Controllers\SubscribersController::class, 'index']);
Route::post('/adhsfaldhflasdjajjYGSKllsaalksk', [App\Http\Controllers\SubscribersController::class, 'index']);
Route::post('/adhsfaldhflasdjajjYGSKllsaalksk/export', [App\Http\Controllers\SubscribersController::class, 'export'])->name('export');
Route::post('/subscribers', [App\Http\Controllers\SubscribersController::class, 'sendMail'])->name('subscribers');
Route::post('/subscribers/{id}', [App\Http\Controllers\SubscribersController::class, 'subscribe'])->name('subscribe');
Route::get('/unsubscribe/{hash}', [App\Http\Controllers\SubscribersController::class, 'unsubscribe'])->name('unsubscribe');