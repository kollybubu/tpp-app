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
        $categories = [
            [
                'name' => "Information Technology"
            ],
            [
                'name' => "Travel"
            ],
            [
                'name' => "Food & Recipt"
            ],
            [
                'name' => "Tourism"
            ]
            ];
            foreach ($categories as $category) {
                Category::create($category);
            }
    }
}
