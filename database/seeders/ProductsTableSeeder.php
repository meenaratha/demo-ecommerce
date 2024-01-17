<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; // Ensure that this namespace is correct

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /// Create some products
    Product::factory()->count(5)->create();

    // Attach related products
    $product1 = Product::find(1);
    $product2 = Product::find(2);
    $product3 = Product::find(3);
    $product4 = Product::find(4);

    $product1->relatedProducts()->attach($product2);
    $product1->relatedProducts()->attach($product3);
    $product1->relatedProducts()->attach($product4);

    $product2->relatedProducts()->attach($product1);
    $product2->relatedProducts()->attach($product3);
    $product2->relatedProducts()->attach($product4);

    $product3->relatedProducts()->attach($product2);
    $product3->relatedProducts()->attach($product1);
    $product3->relatedProducts()->attach($product4);

    $product4->relatedProducts()->attach($product2);
    $product4->relatedProducts()->attach($product3);
    $product4->relatedProducts()->attach($product1);
    }
}
