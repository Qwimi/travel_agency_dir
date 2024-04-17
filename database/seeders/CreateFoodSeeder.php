<?php

namespace Database\Seeders;

use App\Models\Foods;
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
        Foods::create(['name' => 'Трехразовое питание']);
        Foods::create(['name' => 'Пятиразовое питание']);
        Foods::create(['name' => 'Только завтрак']);
        Foods::create(['name' => 'Только ужин']);
        Foods::create(['name' => 'Предпочитаю заботиться о своём питании самостоятельно']);
    }
}
