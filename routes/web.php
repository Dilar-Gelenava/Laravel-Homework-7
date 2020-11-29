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

Route::get('/admin', "ProductsController@index")->name("adminindex");

// Route::get('/admin/create', "ProductsController@create")->name("admincreate");

Route::post('/admin/store', "ProductsController@store")->name("adminstore");

Route::post('/admin/destroy', "ProductsController@destroy")->name("admindestroy");

Route::get('/admin/show/{id}', "ProductsController@show")->name("adminshow");

Route::get('/admin/edit/{id}', "CommentsController@edit")->name("adminedit");

Route::post('/admin/store/comment', "CommentsController@store")->name("adminstorecomment");

Route::post('/admin/update', "CommentsController@update")->name("adminupdate");

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/getcomms', 'ProductsController@posts_comments');
Route::get('/getnums', 'ProductsController@get_phone');

Route::get('/movieandactor', 'ProductsController@movie_actor');