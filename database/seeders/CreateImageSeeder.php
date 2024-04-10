<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Image::create(['url' => 'storage/d9dbbafb49c2d66282665c895cf7b68b.jpg']);
        Image::create(['url' => 'storage/a344a99e5a5f04247acadcee14bfbb87.jpg']);
        Image::create(['url' => 'storage/8a7918db898353e9f20cae2029c493e6.jpg']);
        Image::create(['url' => 'storage/b8a1dccbdeeb6f2a26b4fbbe93c35d02.jpg']);
        Image::create(['url' => 'storage/bf30a3727d12f9863f61cb203bd39ef0.jpg']);
        Image::create(['url' => 'storage/bd631b55ab69c8b1e86625cee488438b.jpg']);
        Image::create(['url' => 'storage/a07da4fc16011fc4be7103ac24a85ece.jpg']);
    }
}
