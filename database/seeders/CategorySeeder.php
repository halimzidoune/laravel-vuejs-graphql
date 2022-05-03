<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Marketing'
        ]);

        Category::create([
            'name' => 'Business'
        ]);

        Category::create([
            'name' => 'Finance'
        ]);

        Category::create([
            'name' => 'Entrepreneurship'
        ]);

        Category::create([
            'name' => 'Science'
        ]);

        Category::create([
            'name' => 'Biography'
        ]);
    }
}
