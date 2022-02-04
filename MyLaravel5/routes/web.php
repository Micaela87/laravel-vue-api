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

Route::get('/', 'HomeController@home') -> name('home');

Route::get('/tvseries', 'HomeController@tvseries') -> name('tvseries');

// Route::get('/tvseries/{id}', 'HomeController@show') -> name('series');

Route::get('/tvseries/create', 'HomeController@create') -> name('create');

// Route::post('/store', 'HomeController@store') -> name('store');

Route::get('/edit/{id}', 'HomeController@edit') -> name('edit');

Route::post('/update/{id}', 'HomeController@update') -> name('update');

// Route::get('/delete/{id}', 'HomeController@delete') -> name('delete');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
