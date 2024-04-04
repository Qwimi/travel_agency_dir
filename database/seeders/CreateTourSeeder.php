<?php

namespace Database\Seeders;

use App\Models\Tour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateTourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Tour::create([
            'name' => 'Экскурсия по архитектурным шедеврам',
            'location' => 'Париж, Франция',
            'price' => 45000,
            'img' => 'storage/paris.jpg'
        ]);

        Tour::create([
            'name' => 'Пляжный отдых на Канарских островах',
            'location' => 'Тенерифе, Испания',
            'price' => 60000,
            'img' => 'storage/tenerife.jpeg'
        ]);

        Tour::create([
            'name' => 'Культурный тур по Москве',
            'location' => 'Москва, Россия',
            'price' => 25000,
            'img' => 'storage/moscow.jpg'
        ]);

        Tour::create([
            'name' => 'Приключения в Долине реки Амазонки',
            'location' => 'Манаус, Бразилия',
            'price' => 80000,
            'img' => 'storage/amazon.jpg'
        ]);

        Tour::create([
            'name' => 'Путешествие к водопадам Игуасу',
            'location' => 'Фос-ду-Игуасу, Аргентина/Бразилия',
            'price' => 70000,
            'img' => 'storage/iguazu.jpg'
        ]);

        Tour::create([
            'name' => 'Сплав по реке Нил',
            'location' => 'Луксор, Египет',
            'price' => 55000,
            'img' => 'storage/nile.jpeg'
        ]);

        Tour::create([
            'name' => 'Экскурсия по историческим местам Рима',
            'location' => 'Рим, Италия',
            'price' => 48000,
            'img' => 'storage/rome.jpg'
        ]);

        Tour::create([
            'name' => 'Сафари в Национальном парке Крюгер',
            'location' => 'Нельспрейт, Южная Африка',
            'price' => 72000,
            'img' => 'storage/kruger.jpg'
        ]);

        Tour::create([
            'name' => 'Гастрономический тур по Лиону',
            'location' => 'Лион, Франция',
            'price' => 42000,
            'img' => 'storage/lyon.jpg'
        ]);

        Tour::create([
            'name' => 'Велосипедный тур по Амстердаму',
            'location' => 'Амстердам, Нидерланды',
            'price' => 32000,
            'img' => 'storage/amsterdam.jpg'
        ]);
    }
}
