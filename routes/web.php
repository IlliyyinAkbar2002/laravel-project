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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Muhammad Fauzan",
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "name" => "Muhammad Fauzan",
        "email" => "fauzan@gmail.com",
        "phone" => "08123456789",
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "login" => "Login Page",
    ]);
});
