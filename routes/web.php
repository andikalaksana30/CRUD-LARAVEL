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

Route::get('/', 'pagesController@index');
Route::get('/about', 'pagesController@about');
Route::get('/mahasiswa', 'mahasiswaController@index');
Route::get('/mahasiswa/create', 'mahasiswaController@create');
Route::get('/mahasiswa/{mahasiswa}', 'mahasiswaController@show');
Route::post('/mahasiswa', 'mahasiswaController@store');

Route::delete('/mahasiswa/{mahasiswa}', 'mahasiswaController@destroy');

Route::get('/mahasiswa/{mahasiswa}/edit', 'mahasiswaController@edit');

Route::patch('/mahasiswa/{mahasiswa}', 'mahasiswaController@update');
