<?php

Route::group(['namespace' => 'Ecoflow\Shop\Controllers'], function () {

    /** Currency Routes */
    Route::group(['namespace' => 'Currency', 'prefix' => 'currency'], function () {
        Route::get('all', 'CurrencyController@index');
        Route::get('/:match', 'CurrencyController@find');
        Route::post('create', 'CurrencyController@create');
        Route::delete('delete/:id', 'CurrencyController@delete');
    });

    /** Shop Routes */
    Route::group(['namespace' => 'Shop', 'prefix' => 'shop'], function () {
        Route::get('all', 'ShopController@index');
        Route::get('/:match', 'ShopController@find');
        Route::post('create', 'ShopController@create');
        Route::delete('delete/:id', 'ShopController@delete');
    });

    /** Category Routes */
    Route::group(['namespace' => 'Category', 'prefix' => 'category'], function () {
        Route::get('all', 'CategoryController@index');
        Route::get('/:match', 'CategoryController@find');
        Route::post('create', 'CategoryController@create');
        Route::delete('delete/:id', 'CategoryController@delete');
    });

    /** Product Routes */
    Route::group(['namespace' => 'Product', 'prefix' => 'product'], function () {
        Route::get('all', 'ProductController@index');
        Route::get('/:match', 'ProductController@find');
        Route::post('create', 'ProductController@create');
        Route::delete('delete/:id', 'ProductController@delete');
    });
});
