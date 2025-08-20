<?php

namespace Database\Seeders;

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
            'name' => 'Glamorous Shirt Dress For Women',
            'image' => 'shirt_dress.jpg',
            'price' => 85,
            'old_price' => 100,
        ]);

        Product::create([
            'name' => 'Jeans for Women - Denim',
            'image' => 'jeans.jpg',
            'price' => 249,
            'old_price' => null,
        ]);

        Product::create([
            'name' => 'Black Wool Beanie & Bobble Hat For Unisex',
            'image' => 'beanie.jpg',
            'price' => 1,
            'old_price' => 10,
        ]);

        Product::create([
            'name' => 'Laptop Backpack',
            'image' => 'backpack.jpg',
            'price' => 100,
            'old_price' => null,
        ]);
    }
}
