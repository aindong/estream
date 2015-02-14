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
	Route::get('/seminars/{id}', ['as' => 'front.index', 'uses' => 'HomeController@seminarSingle']);
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
		Route::get('/users/seminars', ['as' => 'user.dashboard', 'uses' => 'UsersController@seminars']);

		Route::post('/users/{id}/update', ['uses' => 'UsersController@updateUser']);
		Route::post('/users/{id}/password', ['uses' => 'UsersController@updatePassword']);
		Route::post('/users/{id}/picture', ['uses' => 'UsersController@updatePicture']);
		Route::get('/users/{id}/cancelSeminar', ['uses' => 'UsersController@cancelSeminar']);

		Route::post('/users/seminars/register/{id}', ['as' => 'user.dashboard', 'uses' => 'UsersController@registerSeminar']);
	});
});

Route::get('/webcast', ['as' => 'webcast.index', 'prefix' => 'admin', 'before' => 'auth|hasRole:admin', 'uses' => 'WebcastsController@index']);
Route::get('/admin/webcast/{id}/{status}', ['as' => 'webcast.status', 'before' => 'auth|hasRole:admin', 'uses' => 'WebcastsController@webcastStatus']);
Route::get('/webcast/client', ['as' => 'webcast.client', 'uses' => 'WebcastsController@client']);
Route::get('/webcast/seminar/{id}', ['before' => 'auth', 'uses' => 'WebcastsController@seminar']);

Route::post('/webcast/request/{id}/{seminar}', ['before' => 'auth', 'uses' => 'WebcastsController@request']);


Route::get('/admin/downloadables', ['as' => 'downloadables.index', 'uses' => 'DownloadablesController@index']);
Route::get('/downloadables/{id}', ['as' => 'downloadables.show', 'uses' => 'DownloadablesController@download']);
Route::get('/admin/downloadables/create', ['as' => 'admin.downloadables.create', 'before' => 'auth|hasRole:admin', 'uses' => 'DownloadablesController@create']);
Route::post('/admin/downloadables', ['as' => 'admin.downloadables.store', 'before' => 'auth|hasRole:admin', 'uses' => 'DownloadablesController@store']);
Route::delete('/admin/downloadables/{id}', ['as' => 'admin.downloadables.delete', 'before' => 'auth|hasRole:admin', 'uses' => 'DownloadablesController@destroy']);

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
	// Reports
	Route::resource('/admin/reports', 'ReportsController');

	Route::get('/admin/updateStatus/{id}/{status}', ['uses' => 'SeminarsController@updateStatus']);
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
