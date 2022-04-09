<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'productname' => 'Product 1',
            'productcode' => 'P001',
            'productdescription' => 'Product 1 Description',
            'productprice' => '100',
            'productimage' => 'product1.jpg',
        ]);
    }
}
