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

// Static Pages
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
Route::get('info', 'StaticController@info')->name('info');
Route::get('galleries', 'StaticController@galleries')->name('galleries');

Route::get('sample-itinerary', 'StaticController@sample_itinerary')->name('sampleItinerary');

// Blog Pages
Route::get('blog', 'PostController@index')->name('blog');
Route::get('blog/{post}', 'PostController@show')->name('blog-post');
Route::get('blog/tags/{tag}', 'TagController@index');

// Contact Pages
Route::get('contact', 'ContactController@index')->name('contact');

// Session Pages
Route::get('admin/login', 'SessionController@create')->name('login');
Route::post('admin/login', 'SessionController@store');
Route::post('admin/logout', 'SessionController@destroy');

// Admin Pages
Route::group(
    ['middleware' => ['role:super-admin'],
              'prefix' => 'admin',
              'namespace' => 'Admin', ],
    function () {
        Route::get('/', 'AdminController@show')->name('adminDashboard');
        Route::resource('/profile', 'ProfileController')->except(['index', 'create', 'store']);
        Route::resources([
      '/blog-posts' => 'PostController',
      '/todo' => 'TodoController',
      '/transport' => 'TransportController',
      '/tour' => 'TourController',
      '/room' => 'RoomController',
      '/restaurant' => 'RestaurantController',
      '/hotel' => 'HotelController',
      '/fare' => 'FareController',
      '/dish' => 'DishController',
      '/attraction' => 'AttractionController',
      '/contact' => 'AddressbookController',
      '/customer' => 'CustomerController',
      ]);
    }
);
