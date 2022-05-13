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



Route::get('/',function () {
    return view('index');
});

Route::get('/artistas',function () {
    return view('artistas');
});

Route::get('/programacion', function(){
    return view('programacion');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/api',function(){
    return view('api');
});