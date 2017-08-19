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

Route::get('/', 'PagesController@index')->name('home');
Route::get('/return', 'PagesController@return');
Route::get('/unavailable', 'PagesController@unavailable');

// Bikes Resourceful Routes
Route::resource('bikes', 'BikeController', ['only' => [
    'index', 'show', 'update'
]]);

Auth::routes();
