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

// Route::get('/', 'MapController@index');

Route::get('/', 'StaticController@home')->name('home');
Route::get('geography', 'StaticController@geography')->name('geography');
Route::get('history', 'StaticController@history')->name('history');
Route::get('language', 'StaticController@language')->name('language');
Route::get('money', 'StaticController@money')->name('money');
Route::get('safety', 'StaticController@safety')->name('safety');
Route::get('travel-considerations', 'StaticController@travelConsiderations')->name('travelConsiderations');
Route::get('weather', 'StaticController@weather')->name('weather');
Route::get('events', 'StaticController@events')->name('events');
Route::get('services', 'StaticController@services')->name('services');
Route::get('blog', 'StaticController@blog')->name('blog');

Route::get('contact', 'ContactController@index')->name('contact');
