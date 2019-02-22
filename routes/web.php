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

Route::resource('admin/category','Backend\CategoryController');
Route::resource('admin/tag','Backend\TagController');
Route::resource('admin/post','Backend\PostController');

// Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware' =>['auth','admin']],function (){

// }

// Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware' =>['auth','admin']],function (){
	
// }

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','Backend\AdminDashboardController@index')->name('dashboard');
Route::get('/admin-login','Backend\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin-login','Backend\Auth\LoginController@showLoginForm')->name('admin.login');

Route::get('category/{lang?}','CategoryController@index');

