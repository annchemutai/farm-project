<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=>'Tomato',
            'price'=>150,
            'category_id'=>2,
            'image'=>'products/tomatoes.jpg',
            'availability'=>1,
            'description'=>'Juicy and fresh',
        ]);
        Product::create([
            'name'=>'Onions',
            'price'=>160,
            'category_id'=>2,
            'image'=>'products/onions.jpg',
            'availability'=>1,
            'description'=>'Juicy and fresh',
        ]);
        Product::create([
            'name'=>'Oranges',
            'price'=>200,
            'category_id'=>1,
            'image'=>'products/oranges.jpg',
            'availability'=>1,
            'description'=>'Juicy and fresh',
        ]);
    }
}
