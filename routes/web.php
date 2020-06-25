<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index');
})->name('home.index');

Route::get('/products', function () {
    class Product
    {
        public $id;
        public $product_name;
        public $image;
        public $price;
    }
    $apple = new Product();
    $apple->id = 1;
    $apple->product_name = 'apple';
    $apple->image= 'https://i5.walmartimages.ca/images/Enlarge/094/514/6000200094514.jpg';
    $apple->price = 1.6;
    $orange = new Product();
    $orange->id = 2;
    $orange->product_name = 'orange';
    $orange->image= 'https://www.marlerblog.com/files/2013/03/orange.jpg';
    $orange->price = 2.4;
    $products = array($apple, $orange);
    return view('products.product_list', ['products' => $products]);
})->name('products.product_list');