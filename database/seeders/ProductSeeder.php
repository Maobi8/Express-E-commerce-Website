<?php

namespace Database\Seeders;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

         // Disable foreign key checks
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
         // Clear old data
    DB::table('product_images')->truncate();
    DB::table('products')->truncate();

      // Re-enable foreign key checks
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    
         $product = Product::create([
        'name' => 'Wireless Headphones',
        'description' => 'High-quality wireless headphones with noise cancellation.',
        'price' => 25000,
    ]);

    $product->images()->createMany([
        ['image_path' => 'laptops/headphones1.jpg'],
        ['image_path' => 'laptops/headphones2.jpg'],
        ['image_path' => 'laptops/headphones3.jpg'],
    ]);

    // Add more products if you want...
    }
}
