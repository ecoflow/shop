<?php

use Illuminate\Support\Facades\Route;

use Ecoflow\Shop\Controllers\Shop\ShopController;
use Ecoflow\Shop\Controllers\Product\ProductController;
use Ecoflow\Shop\Controllers\Category\CategoryController;
use Ecoflow\Shop\Controllers\Currency\CurrencyController;

Route::resource('shop', ShopController::class);
Route::resource('currency', CurrencyController::class);
Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
