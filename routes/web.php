<?php

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

Route::get('/', function () {return view('main');});

Route::get('movie','MovieController@index')->name('movie.index');

Route::get('main','MovieController@main')->name('main');

Route::get('about','MovieController@about')->name('about');

Route::get('create','MovieController@create')->name('create.movie');

Route::post('store','MovieController@store')->name('movie.store');

Route::get('edit/movie/{movie_name}','MovieController@edit');

Route::post('update/movie/{movie_name}','MovieController@update');

Route::get('delete/movie/{movie_name}','MovieController@delete');

Route::get('show/movie/{movie_name}','MovieController@show');