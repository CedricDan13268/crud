<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductContoller;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/products', function () {
  //  return view('products.products');
//});

Route::resource('products' ,ProductContoller::class);