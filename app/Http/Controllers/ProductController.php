<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use DataTables;

class ProductController extends Controller
{

 public function product(){
    if(request()->ajax()) {
        return datatables()->of(Product::select('*'))
        ->addColumn('action', 'product-action')
        ->rawColumns(['action'])
        ->addIndexColumn()
        ->make(true);
    }


    return view('admin.pages.product');
 }

 public function store_product(Request $request){
    if (request()->hasFile('productimage')) {
        $productimage = request()->file('productimage');
        $image_url = date('dmYHis') . $productimage->getClientOriginalName();
        // $productimage->move(public_path('upload/product'), $image_url);
        // $product->productimage = $image_url;
        // Store the image in the 'productimage' directory within the storage disk
        $path = $productimage->storeAs('productimage', $image_url, 'public');
        // Add the 'storage' folder to the path
        $fullPath = 'storage/' . $path;

    }

    $productId = $request->id;
        $product   =   Product::updateOrCreate(
                    [
                     'id' => $productId
                    ],
                    [
                    'product_name' => $request->product_name,
                    'product_description' => $request->add_product_description,
                    'original_price' => $request->original_price,
                    'discount_price' => $request->discount_price,
                    'tax' => $request->tax,
                    'brand' => $request->brand,
                    'product_code' => $request->product_code,
                    'reward_point' => $request->reward_point,
                    'stock' => $request->stock,
                    'quantity' => $request->quantity,
                    'meta_tag' => $request->meta_tag,
                    // 'productimage' => $request->productimage,
                    // 'productimage' => isset($image_url) ? $image_url : null,
                    'productimage' => $fullPath,
                    'product_thumbnail' => $request->product_thumbnail,
                    'discount_option' => $request->discount_option,
                    'status' => $request->status,

                    ]);

        // Set success message in session
    session()->flash('success', 'product created successfully!');

    // Return a JSON response with the category data and success message
    return Response()->json($product);
 }

 public function edit_product(Request $request){
        $where = array('id' => $request->id);
        $product  = Product::where($where)->first();

        // Set success message in session
        session()->flash('success', 'product edit successfully!');
        return Response()->json($product);

 }

 public function destroy_product(Request $request){
        $product = Product::where('id',$request->id)->delete();

        return Response()->json($product);
 }


 }
