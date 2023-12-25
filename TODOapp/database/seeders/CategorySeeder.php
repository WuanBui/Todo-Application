<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public $categories = [
        [
            'id' => 1,
            'user_id' => 1,
            'name' => 'School',
            'description' => '',
        ],
        [
            'id' => 2,
            'user_id' => 1,
            'name' => 'Home',
            'description' => '',
        ],
    ];

    private function getCategories()
    {
        return $this->categories;
    }
    public function run(): void
    {
        foreach ($this->getCategories() as $category) {
            Category::create($category);
        }
    }
}
