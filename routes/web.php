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

Route::get('/', 'PageController@index');

Route::get('/aboutus','PageController@aboutus');

Route::get('/location','PageController@location');

Route::get('/howitworks','PageController@howitworks');

Route::resource('posts','PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/welcome', 'DashboardController@welcome');

Route::get('/', 'SearchController@index');

Route::get('/search', 'SearchController@action');

Route::get('/admin','AdminController@adminDashboard')->middleware('admincheck');


Route::get('/users','AdminController@users');