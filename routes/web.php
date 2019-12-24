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

/*Route::get('/', function () {
    return view('welcome');
}); */
Route::get('home', 'PagesController@getHome'); 
Route::get('shopping-cart', 'PagesController@getShoppingcart');
Route::get('list-product', 'PagesController@getListproduct');
Route::get('meat', 'PagesController@getMeat');
Route::get('product/{id}', 'PagesController@getProduct');
Route::get('handbook', 'PagesController@getHandbook');
//gọi hàm getTest trong Controller.php
//search
Route::post('search', 'PagesController@postSearch');
// Route::post('save-cart', 'CartController@save_cart');