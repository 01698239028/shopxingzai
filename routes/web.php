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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homes','HomeshopController@index');
Route::get('/category/{id}','ProductsController@category');
Route::get('/product/{id}','ProductsController@show');
Route::get('search','ProductsController@index');
Route::get('log-in','LoginController@index');
/*Route::get('create-account','RegisterController');*/
Route::get('contact','ContactController@index');

Route::group(['middleware'=>['auth']],function (){

    Route::group(['middleware'=>['checkadmin']], function(){

        Route::get('admin','Admin\DashboardController@index');

        Route::resource('admin/category','Admin\CategoryController');

        Route::resource('admin/user','Admin\UserController');

        Route::resource('admin/product','Admin\ProductController');

        Route::resource('admin/oder','Admin\OderController');

        Route::resource('admin/post','Admin\PostController');

    });
});



