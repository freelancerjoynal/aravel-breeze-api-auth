<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Sample Product 1',
            'description' => 'This is a sample product.',
            'price' => 29.99,
            'stock' => 50,
        ]);

        Product::create([
            'name' => 'Sample Product 2',
            'description' => 'Another sample product.',
            'price' => 49.99,
            'stock' => 30,
        ]);
    }
}
