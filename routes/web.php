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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware'=>'auth'],function (){
    Route::get('chat',[\App\Http\Controllers\ChatController::class,'Main'])->name('chat');

    Route::get('all_message',[\App\Http\Controllers\ChatController::class,'all_message']);

    Route::post('store_message',[\App\Http\Controllers\ChatController::class,'store_message']);

});









Route::get('test',function (){
    event(new \App\Events\ChatEvent());
    return 'hi';
});
