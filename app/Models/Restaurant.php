<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    private static $restaurant_list = [
        [
            'name' => "KFC",
            'description' => "KFC (short for Kentucky Fried Chicken) is an American fast food restaurant chain headquartered in Louisville, Kentucky, that specializes in fried chicken. It is the world's second-largest restaurant chain (as measured by sales) after McDonald's, with 22,621 locations globally in 150 countries as of December 2019. The chain is a subsidiary of Yum! Brands, a restaurant company that also owns the Pizza Hut, Taco Bell, and WingStreet chains.",
        ],
        [
            'name' => "McDonald's",
            'description' => "McDonald's Corporation is an American fast food company, founded in 1940 as a restaurant operated by Richard and Maurice McDonald, in San Bernardino, California, United States. They rechristened their business as a hamburger stand, and later turned the company into a franchise, with the Golden Arches logo being introduced in 1953 at a location in Phoenix, Arizona. In 1955, Ray Kroc, a businessman, joined the company as a franchise agent and proceeded to purchase the chain from the McDonald brothers. McDonald's had its previous headquarters in Oak Brook, Illinois, but moved its global headquarters to Chicago in June 2018.",
        ]
    ];

    public static function getAllRestaurants() {
        return collect(self::$restaurant_list);
    }
}
