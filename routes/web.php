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

Route::resource('books','BookController');
Route::post('/books/create','BookController@store');
Route::get('/books/edit/{id}','BookController@edit');
Route::post('/books/edit/','BookController@update');
Route::delete('/books/hapus/{id}','BookController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
