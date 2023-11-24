<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Новини'
        ]);

        Category::create([
            'name' => 'Анонси'
        ]);

        Category::create([
            'name' => 'Події'
        ]);

        Category::create([
            'name' => 'Відеосюжети'
        ]);
    }
}
