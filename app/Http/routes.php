<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/categories', 'CategoriesController@index');

Route::get('/', 'WelcomeController@index');

//Rotas referente as paginas admin
Route::get('/admin/categories', 'AdminCategoriesController@index');
Route::get('/admin/products', 'AdminProductsController@index');