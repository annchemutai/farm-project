<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ProductSeller; //<--add this

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductSeller::create([
            'product_id'=>1,
            'user_id'=>2,
        ]);

        ProductSeller::create([
           'product_id'=>2,
            'user_id'=>2,
        ]);
        ProductSeller::create([
            'product_id'=>3,
            'user_id'=>2,
        ]);
        ProductSeller::create([
            'product_id'=>4,
            'user_id'=>2,
        ]);
    }
}
