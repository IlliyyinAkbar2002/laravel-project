<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewRestaurant extends Model
{
    use HasFactory;

    // Specify the table name if it's not the pluralized form of the model name
    protected $table = 'restaurant';

    // Mass assignable attributes
    // protected $fillable = [
    //     'title',
    //     'slug',
    //     'location',
    //     'body',
    // ];

    public function index()
    {
        $restaurants = NewRestaurant::all(); // Retrieve all restaurants
        return view('restaurants.index', compact('restaurants'));
    }
}
