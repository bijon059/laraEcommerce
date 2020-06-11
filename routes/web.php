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

Route::get('/', 'PagesController@index')->name('index');
Route::get('welcome', 'PagesController@welcome')->name('welcome');


Route::get('products', 'PagesController@products')->name('products');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminPagesController@index')->name('admin.index');

    Route::group(['prefix' => '/product'], function () {
        Route::get('/list', 'ProductController@list')->name('admin.product.list');
        Route::get('/create', 'ProductController@create')->name('admin.product.create');


        Route::get('/search', 'ProductController@search')->name('admin.product.search');
        Route::get('autocomplete', 'ProductController@autocomplete')->name('autocomplete');
        Route::get('searchResult', 'ProductController@searchResult')->name('searchResult');

        Route::get('/edit/{id}', 'ProductController@edit')->name('admin.product.edit');

        Route::post('/create', 'ProductController@store')->name('admin.product.store');

        Route::post('/edit/{id}', 'ProductController@update')->name('admin.product.update');

        Route::post('/delete/{id}', 'ProductController@delete')->name('admin.product.delete');
    });

    Route::group(['prefix' => '/categories'],function()
    {
        Route::get('/', 'CategoriesController@index')->name('admin.category.index');
        Route::get('/create', 'CategoriesController@create')->name('admin.category.create');

        Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('admin.category.edit');

        Route::post('/category/create', 'CategoriesController@store')->name('admin.category.store');

        Route::post('/category/edit/{id}', 'CategoriesController@update')->name('admin.category.update');

        Route::post('/category/delete/{id}', 'CategoriesController@delete')->name('admin.category.delete');
    });


});
