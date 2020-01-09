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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/buku','BukuController@index');
Route::post('/buku','BukuController@store');
Route::delete('/buku/{book}','BukuController@destroy');
Route::get('/buku/edit/{book}','BukuController@edit');
Route::patch('/buku/edit/{book}','BukuController@update');