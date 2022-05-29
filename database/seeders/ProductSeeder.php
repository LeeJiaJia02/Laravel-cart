<?php

namespace Database\Seeders;

use App\Models\Product;
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
        $products = [
            [
                'name'=>'Microsoft Surface Pro 8 ', 
                'details'=>'11th Gen Intel® Core™ processor, Windows 11, and up to 32GB RAM', 
                'description'=>'Surface Pro 8 is the first consumer laptop-to-tablet PC based on the Intel® Evo™ platform for i5 and i7 options with storage 256GB and above and designed to light up the best of Windows 11. Laptop, tablet, or portable digital canvas.', 
                'brand'=>'Mocrosoft', 
                'price'=>8750, 
                'shipping_cost'=>25, 
                'image_path'=>'storage/product1.png'
            ], 
            [
                'name'=>'Inspiron 14 Laptop', 
                'details'=>'11th Gen Intel® Core™ i5-11330H (8 MB cache, 4 cores, 8 threads, up to 4.50 GHz Turbo)', 
                'description'=>'14-inch always-ready laptop that connects you to your world. Best blend of portability and productivity. Featuring 11th Gen Intel® Core™ processors.', 
                'brand'=>'Dell', 
                'price'=> 2899, 
                'shipping_cost'=>25, 
                'image_path'=>'storage/product1.png'
            ], 
        ];
        foreach($products as $key => $value){
            Product::create($value);
        }
    }
}
