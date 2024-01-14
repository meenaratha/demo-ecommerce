<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductDisplayController extends Controller
{
    public function webProductshow()
    {
        $products = Product::all();

        return view('welcome', compact('products'));
    }


}
