<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
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



Route::get('/',function () {
    return view('index');
});
Route::get('/index',function () {
    return view('index');
});

Route::get('/artistas',function () {
    return view('artistas');
});

Route::get('/programacion', function(){
    return view('programacion');
});




Route::get('/inicio','App\Http\Controllers\MainController@index');
Route::post('/inicio/checklogin','App\Http\Controllers\MainController@checklogin');
Route::get('/inicio/successlogin','App\Http\Controllers\MainController@successlogin');
Route::get('/inicio/logout', 'App\Http\Controllers\MainController@logout');

Route::get('/register', 'App\Http\Controllers\UserController@index');
Route::post('/register/check', 'App\Http\Controllers\UserController@checkreg');

Route::get('/api',function(){
    return view('api');
})->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
