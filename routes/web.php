<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', 'App\Http\Controllers\ProductController@index');

Route::post('products/update','ProductController@update')->name('products.update');

Route::get('products/destroy/{id}','ProductController@destroy');


Route::resource('ajax-crud', AjaxCrudController::class);

Route::post('ajax-crud/update', 'App\Http\Controllers\AjaxCrudController@update')->name('ajax-crud.update');

Route::get('ajax-crud/destroy/{id}', 'App\Http\Controllers\AjaxCrudController@destroy');