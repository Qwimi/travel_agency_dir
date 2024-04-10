<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateHotelSeeder extends Seeder
{
    /**Ж
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //php artisan db:seed --class=CreateTourSeeder 
        Hotel::create(['name' => 'Одноместный номер']);
        Hotel::create(['name' => 'Двуместный номер']);
        Hotel::create(['name' => 'Семейный номер']);
        Hotel::create(['name' => 'Самостоятельно нашел/а, где остановиться, бронировать не надо']);
    }
}
