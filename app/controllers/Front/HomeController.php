<?php namespace Controllers\Front;

use View;

class HomeController extends \BaseController {

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

	/**
	 * Index page
	 *
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		return View::make('front.index');
	}

	/**
	 * Services
	 *
	 * @return \Illuminate\View\View
	 */
	public function services()
	{
		return View::make('front.services');
	}

	/**
	 * Seminars
	 *
	 * @return \Illuminate\View\View
	 */
	public function seminars()
	{
		return View::make('front.seminars');
	}

	/**
	 * About Us
	 *
	 * @return \Illuminate\View\View
	 */
	public function aboutUs()
	{
		return View::make('front.about');
	}

	/**
	 * Faq
	 *
	 * @return \Illuminate\View\View
	 */
	public function faq()
	{
		$faqs = \Faq::all();
		return View::make('front.faq', compact('faqs'));
	}

	/**
	 * News
	 *
	 * @return \Illuminate\View\View
	 */
	public function news()
	{
		return View::make('front.news');
	}

}
