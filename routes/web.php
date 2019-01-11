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

Route::get('/', "ProductController@index");


Route::get("/signup", "PageController@login");

Route::resource("/products", "ProductController");
Route::get("/category/{id}", "CategoryController@getProductByCategory");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get("/search", "SearchController@search");
Route::get("/cat", "CategoryController@getProductByCategory");


