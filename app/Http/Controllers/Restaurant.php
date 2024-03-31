<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Restaurant extends Controller
{
    //

    public function SelectDataRestauran($select)
    {
        $data_restaurant = \App\Models\Restaurant::SelectRestaurant($select);
        return view('contact', [
            "title" => "Restaurant",
            "data_all" => $data_restaurant
        ]);
    }

    

}
