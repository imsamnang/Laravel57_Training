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

Route::get('/', function () {
    return view('welcome');
});

Route::get('image-gallery', 'ImageGalleryController@index');
Route::post('image-gallery', 'ImageGalleryController@upload');
Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');


Route::group(['prefix' => 'laravel-crud-image-gallery'], function () {
    Route::get('/', 'ImageController@index');
    Route::match(['get', 'post'], 'create', 'ImageController@create');
    Route::match(['get', 'put'], 'update/{id}', 'ImageController@update');
    Route::delete('delete/{id}', 'ImageController@delete');
});	

Route::view('/admin','layouts.master');