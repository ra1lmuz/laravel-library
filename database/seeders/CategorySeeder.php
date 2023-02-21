<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::query()->create(['name' => 'Прикоючения']); // 1
        Category::query()->create(['name' => 'Детектив']); // 2
        Category::query()->create(['name' => 'Триллер']); // 3
        Category::query()->create(['name' => 'Боевик']); // 4
        Category::query()->create(['name' => 'Фантастика']); // 5

    }
}
