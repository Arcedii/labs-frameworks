<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category; // Добавьте этот импорт

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::factory()->count(5)->create(); // Создание 5 категорий
    }
}
