<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    // php artisan db:seed

    public function run()
    {
        $this->call(CreateFoodSeeder::class);
        $this->call(CreateHotelSeeder::class);
        $this->call(CreateImageSeeder::class);
        $this->call(CreateTourSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
