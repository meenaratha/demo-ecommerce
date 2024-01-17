<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductDisplayController extends Controller
{
    public function webProductshow()
    {
        $products = Product::all();

        return view('website.home.index', compact('products'));
    }

    public function webProductdetails($id)
{
    $category=Category::all(); //table name
     $product = Product::find($id);


    // Check if the product exists
    if (!$product) {
        return redirect()->route('/')->with('error', 'Product not found.');
    }

    // Fetch related products
    $relatedProducts = $product->relatedProducts;

    return view('website.pages.product-details', ['product' => $product, 'relatedProducts' => $relatedProducts, 'categories'=>$category,]);
}

public function webquickview($id)
{

    $product = Product::find($id);

    return view('website.pages.quick-view', ['product' => $product]);
}

// related products detail page
public function showRelatedProducts($id)
{
    $relatedProduct = Product::find($id);

    if (!$relatedProduct) {
        return redirect()->route('products.index')->with('error', 'Related product not found.');
    }
     // Fetch related products
     $relatedProducts =  $relatedProduct ->relatedProducts;

    return view('website.pages.relatedproduct-detail', ['relatedProduct' => $relatedProduct, 'relatedProducts' => $relatedProducts]);
}

}
