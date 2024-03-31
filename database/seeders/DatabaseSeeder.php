<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

// use App\Http\Controllers\Restaurant;
use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Restaurant::create([
            'title' => 'Toko pertama',
            'slug' => 'toko-pertama',
            'location' => 'Surabaya',
            'body' => 'Ini toko terbesar di Surabaya'
        ]);

        Restaurant::factory(10)->create();
    }
}
