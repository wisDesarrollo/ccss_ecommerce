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

Route::get('/', 'MainController@home');

Auth::routes();

Route::resource('products','ProductsController');
/*
	GET/products => index
	POST/products =>store
	GET/products/create =>formulario para crear

	GET /products/:id => mostrar in producto con si ID

	GET/products/:id/edit



*/

Route::get('/home', 'HomeController@index');
