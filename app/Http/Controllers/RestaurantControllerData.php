<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewRestaurant; // Ensure correct model is used

class RestaurantControllerData extends Controller
{
    public function index()
    {
        $restaurants = NewRestaurant::all(); // Correct model name
        return view('restaurants', ['restaurants' => $restaurants]); // Correct view path
    }

    public function show($id)
    {
        $restaurant = NewRestaurant::find($id); // Correct model name
        return view('restaurants.show', ['restaurant' => $restaurant]); // Assuming 'restaurants.show' is a correct view path
    }
}
