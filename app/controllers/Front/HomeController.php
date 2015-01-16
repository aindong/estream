<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('front.index');
	}

	public function services()
	{
		return View::make('front.services');
	}

	public function seminars()
	{
		return View::make('front.seminars');
	}

	public function aboutUs()
	{
		return View::make('front.about');
	}

	public function faq()
	{
		return View::make('front.faq');
	}

	public function news()
	{
		return View::make('front.news');
	}

}
