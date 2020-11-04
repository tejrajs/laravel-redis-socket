<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/test', function () {
    event(new \App\Events\UserEvent(\App\User::first()));
});

Route::post('/ping', function (\Illuminate\Http\Request $request) {
    $user = \App\User::find($request->user_id);
    $message = $request->message;
    if(!empty($user))
    event(new \App\Events\UserEvent($user, $message));
});
