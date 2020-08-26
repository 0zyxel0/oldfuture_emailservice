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

Route::get('/','PageController@lang_page');
Route::get('/en','PageController@en_page');
Route::get('/de','PageController@de_page');
Route::get('/fr','PageController@fr_page');