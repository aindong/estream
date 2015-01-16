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
Route::group([], function() {

});

/**
 * Backpage routes
 */
Route::group([], function() {
	Route::get('/', ['as' => 'front.index', 'uses' => 'HomeController@index']);
	Route::get('/services', ['as' => 'front.index', 'uses' => 'HomeController@services']);
	Route::get('/seminars', ['as' => 'front.index', 'uses' => 'HomeController@seminars']);
	Route::get('/about-us', ['as' => 'front.index', 'uses' => 'HomeController@aboutUs']);
	Route::get('/faq', ['as' => 'front.index', 'uses' => 'HomeController@faq']);
	Route::get('/news', ['as' => 'front.index', 'uses' => 'HomeController@news']);
});

/**
 * API routes
 * v1 api
 */
Route::group(['prefix' => '/api/v1/'], function() {

});