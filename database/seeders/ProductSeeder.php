<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [   'product_name' =>'Dell Vostro 14 3400 Core i3 11th Gen 14" HD Laptop',
                'product_brand' =>'Dell',
                'product_processor' =>'Core i3',
                'product_screen' =>'14" Display',
                'product_price' =>'45800',
                'product_ram' =>'4GB',
                'product_storage' =>'1TB',
                'status'=>'1'
            ]
    
          
            ]);
    
    }
}
