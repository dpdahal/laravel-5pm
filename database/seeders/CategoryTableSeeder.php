<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryData = [
            [
                'name' => 'sports'
            ],
            [
                'name' => 'technology'
            ],
            [
                'name' => 'entertainment'
            ],
            [
                'name' => 'politics'
            ],
            [
                'name' => 'health'
            ],
            [
                'name' => 'education'
            ],
            [
                'name' => 'business'
            ],
            [
                'name' => 'science'
            ],
            [
                'name' => 'lifestyle'
            ],
            [
                'name' => 'travel'
            ],
        ];

        foreach ($categoryData as $cat) {
            $total = Category::where('name', $cat['name'])->count();
            if ($total == 0) {
                Category::create($cat);
            }
        }
    }
}
