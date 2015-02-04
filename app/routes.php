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
	Route::get('/news/{id}', ['as' => 'front.index', 'uses' => 'HomeController@newsSingle']);
	Route::get('/contact-us', ['as' => 'front.index', 'uses' => 'HomeController@contactUs']);
	Route::get('/gallery', ['as' => 'front.index', 'uses' => 'HomeController@gallery']);

	Route::get('/login', ['as' => 'front.login', 'uses' => 'UsersController@login']);
	Route::get('/logout', ['as' => 'front.logout', 'uses' => 'UsersController@logout']);

	Route::group(['before' => 'auth|hasRole:user'], function() {
		Route::get('/users/dashboard', ['as' => 'user.dashboard', 'uses' => 'UsersController@index']);
	});
});

/**
 * Backpage routes
 */
Route::group(['namespace' => 'Controllers\Back', 'before' => 'auth|hasRole:admin'], function() {
	Route::get('/admin/dashboard', ['as' => 'admin.dashboard', 'uses' => 'AdminController@index']);

	// Users
	Route::resource('/admin/users', 'UsersController');
	// Seminars
	Route::resource('/admin/seminars', 'SeminarsController');
	// Medias
	Route::resource('/admin/medias', 'MediasController');
	// Articles
	Route::resource('/admin/articles', 'ArticlesController');
	// Faqs
	Route::resource('/admin/faqs', 'FaqsController');
	// Logs
	Route::resource('/admin/logs', 'LogsController');
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

Route::get('test', function() {
	return View::make('test');
});
