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

Route::get('/', 'PaginasController@inicio');
Route::get('/nosotros','PaginasController@nosotros');

//Rutas para la administración
Route::resource('perfiles', 'Admin\PerfilesController');
Route::resource('categorias', 'Admin\CategoriasController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');