<?php

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
Route::get('/contact', 'PagesController@contact')->name('contact');


Route::get('/products', 'PagesController@products')->name('products');

Route::group(['prefix' => 'admin'], function(){
  Route::get('/', 'AdminPagesController@index')->name('admin.index');
  Route::get('/products', 'AdminPagesController@manage_products')->name('admin.products');
  Route::get('/product/create', 'AdminPagesController@product_create')->name('admin.product.create');
  Route::get('/product/edit/{id}', 'AdminPagesController@product_edit')->name('admin.product.edit');

  Route::post('/product/create', 'AdminPagesController@product_store')->name('admin.product.store');

  Route::post('/product/edit/{id}', 'AdminPagesController@product_update')->name('admin.product.update');
});
