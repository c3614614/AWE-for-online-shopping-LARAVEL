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
        $products = [
            ['artist' => 'The Jam', 'title' => 'Modern World','price' => 399, 'type'=>2],
            ['artist' => 'Amy Winehouse', 'title' => 'Back to Black','price' => 299, 'type'=>2],
            ['artist' => 'Charles Dickens', 'title' => 'Greate Expectations','price' => 67, 'type'=>1],
            ['artist' => 'lil Durk', 'title' => 'on my life','price' => 78, 'type'=>2],
        ];

        foreach($products as $product) {
            Product::create([
                'artist' => $product['artist'],
                'title' => $product['title'],
                'price' => $product['price'],
                'product_type_id' => $product['type'],
       ]);
    }

    }
} 
