<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductDisplayController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('website.home.index');
});


Route::get('/admin', function () {
    return view('dashboard.index');
});

Route::get('/product', function () {
    return view('dashboard.pages.product');
});
Route::get('/add-product', function () {
    return view('dashboard.pages.add-product');
});

//product
Route::get('/product-show', [ProductController::class, 'product']);
Route::post('/product-store', [ProductController::class, 'store_product']);
Route::post('/product-edit', [ProductController::class, 'edit_product']);
Route::post('/product-delete', [ProductController::class, 'destroy_product']);


//  crud operation ajax sample testing
Route::get('/ajax-crud-datatable', [CategoryController::class, 'category']);
Route::post('/category-store', [CategoryController::class, 'store_category']);
Route::post('/category-edit', [CategoryController::class, 'edit_category']);
Route::post('/category-delete', [CategoryController::class, 'destroy_category']);


//website
Route::get('/web', [ProductDisplayController::class, 'webProductshow']);
