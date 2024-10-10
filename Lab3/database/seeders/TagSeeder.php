<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag; // Добавьте этот импорт

class TagSeeder extends Seeder
{
    public function run()
    {
        Tag::factory()->count(5)->create(); // Создание 5 тегов
    }
}
