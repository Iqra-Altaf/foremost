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

Route::get('/', 'SiteController@index')->name('index');
Route::get('/services', 'SiteController@services')->name('services');
Route::get('/about', 'SiteController@about')->name('about');
Route::get('/gallery', 'SiteController@gallery')->name('gallery');
Route::get('/like/{package}', 'SiteController@addLike')->name('add_like');
Route::get('/service/{service_id}', 'SiteController@service')->name('service');
Route::get('/PackageDetail/{package}', 'SiteController@packageDetail')->name('package_detail');
Route::get('/MorePackages', 'SiteController@packages')->name('more_packages');
Route::get('/AllParlors', 'SiteController@allParlors')->name('all_parlors');
Route::get('/ParlorDetails/{parlor}', 'SiteController@parlorDetails')->name('parlor_details');
Route::get('/book/{package}', 'SiteController@book')->name('book')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('categories', 'CategoryController');

Route::resource('users', 'UserController');

Route::resource('parlors', 'ParlorController');

Route::resource('packages', 'PackageController');

Route::resource('galleries', 'GalleryController');

Route::resource('bookings', 'BookingController');
