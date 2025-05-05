<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create(),

        Category::create([
            'name' => 'web design',
            'slug' => 'web-design',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'machine learning',
            'slug' => 'machine-learning',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'UI',
            'slug' => 'ui',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'UX',
            'slug' => 'UX',
            'color' => 'yellow'
        ]);

    }
}
