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
        //
        $categories =[
            ['name'=>'T-Shirt'],
            ['name'=>'Pants'],
            ['name'=>'Dresses'],
            ['name'=>'Shoes']
        ];
        Category::insert($categories);
    }
}

