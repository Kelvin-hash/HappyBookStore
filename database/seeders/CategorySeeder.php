<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        Category::create([
            'category' => 'Motivational'
        ]);
        //2
        Category::create([
            'category' => 'Fiction'
        ]);
        //3
        Category::create([
            'category' => 'Story'
        ]);
        //4
        Category::create([
            'category' => 'Knowledge'
        ]);
        //5
        Category::create([
            'category' => 'Scientific'
        ]);
        //6
        Category::create([
            'category' => 'Novel'
        ]);
        //7
        Category::create([
            'category' => 'Poetry'
        ]);
        //8
        Category::create([
            'category' => 'Drama'
        ]);
        //9
        Category::create([
            'category' => 'Classic'
        ]);
        //10
        Category::create([
            'category' => 'Cartoon'
        ]);
    }
}
