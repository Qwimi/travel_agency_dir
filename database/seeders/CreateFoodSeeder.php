<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Food::create(['name' => 'Трехразовое питание']);
        Food::create(['name' => 'Пятиразовое питание']);
        Food::create(['name' => 'Без питания']);
        Food::create(['name' => 'Только завтрак']);
        Food::create(['name' => 'Только ужин']);
    }
}
