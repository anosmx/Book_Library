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

Route::get('/', 'BookController@index')->name('books.index');
Route::get('/home', 'BookController@index')->name('home');
Route::get('/writings', 'BookController@writings')->name('books.writings');
Route::get('/addbook', 'BookController@addBook')->name('books.addbook');

Auth::routes();

// Admin Route group
Route::group(['middleware'=>'admin'], function (){
    Route::resource('admin/users', 'AdminUsersController');
});





