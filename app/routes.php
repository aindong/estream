<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/**
 * Frontpage routes
 */
Route::group(['namespace' => 'Controllers\Front'], function() {
	Route::get('/', ['as' => 'front.index', 'uses' => 'HomeController@index']);
	Route::get('/services', ['as' => 'front.index', 'uses' => 'HomeController@services']);
	Route::get('/seminars', ['as' => 'front.index', 'uses' => 'HomeController@seminars']);
	Route::get('/about-us', ['as' => 'front.index', 'uses' => 'HomeController@aboutUs']);
	Route::get('/faq', ['as' => 'front.index', 'uses' => 'HomeController@faq']);
	Route::get('/news', ['as' => 'front.index', 'uses' => 'HomeController@news']);

	Route::get('/login', ['as' => 'front.login', 'uses' => 'UsersController@login']);
	Route::get('/logout', ['as' => 'front.logout', 'uses' => 'UsersController@logout']);
});

/**
 * Backpage routes
 */
Route::group(['namespace' => 'Controllers\Back'], function() {
	Route::get('/user/dashboard', ['as' => 'user.dashboard', 'uses' => 'UsersController@index']);

	Route::get('/admin/dashboard', ['as' => 'admin.dashboard', 'uses' => 'AdminController@index']);
	Route::get('/admin/users', ['as' => 'admin.users.index', 'uses' => 'AdminController@users']);
});

/**
 * API routes
 * v1 api
 */
Route::group(['prefix' => '/api/v1/'], function() {
	// Users api
	Route::post('users/login', ['as' => 'user.login', 'uses' => 'UsersApiController@login']);
	Route::post('users/create', ['as' => 'user.register', 'uses' => 'UsersApiController@register']);
});