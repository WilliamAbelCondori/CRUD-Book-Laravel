<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){
    return view('layouts.app');
});

Route::get('/books', 'BookController@index')->name('libros');
Route::post('/books','BookController@store');
Route::get('/books/create', 'BookController@create')->name('book.create');
Route::put('/books/{id}', 'BookController@update');
Route::delete('/books/{id}', 'BookController@destroy')->name('book.destroy');
Route::get('/books/{id}/edit', 'BookController@edit')->name('book.edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
