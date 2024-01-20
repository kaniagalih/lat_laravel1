<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function(){
    return view('home');
});

Route::get('/About', function(){
    return view('about', [
        "name" => "Kania Galih Widowati",
        "email" => "kaniagalih@gmail.com",
        "image" => "y.jpeg"
    ]);
});

Route::get('/Posts', function(){
    return view('posts');
});