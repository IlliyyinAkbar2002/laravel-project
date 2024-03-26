<?php

use App\Http\Controllers\RestaurantController;
use App\Models\Restaurant;
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

// Route::get('/', function() {
//     return view('index', [
//         "title" => "Home",
//         "description" => restaurant::all()
//     ]);
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
        "restaurant" => Restaurant::getAllRestaurants()
    ]);
});


Route::get('/login', function () {
    return view('login', [
        "login" => "Login Page",
    ]);
});
