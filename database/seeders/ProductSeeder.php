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
        $product = [
            [
                'name' => 'Camera',
                'Description' => 'This is a camera!',
                'Price' => '100000',
            ],
            [
                'name' => 'Shoe',
                'Description' => 'This is a Shoe!',
                'Price' => '20000',
            ],
            [
                'name' => 'Shirt',
                'Description' => 'This is a Shirt!',
                'Price' => '1000',
            ],
            [
                'name' => 'Bag',
                'Description' => 'This is a Bag!',
                'Price' => '1500',
            ],
        ];
        foreach ($product as $product) {
            Product::create($product);
        }
    }
}
