<?php namespace Controllers\Front;

use View;
use Article;
use Seminar;

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
		$seminars = \Seminar::orderBy('start_at', 'desc')->paginate(5);
		return View::make('front.seminars', compact('seminars'))
			->with('pagination', $seminars->links());
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

	public function contactUs()
	{
		return View::make('front.contact');
	}

	/**
	 * Faq
	 *
	 * @return \Illuminate\View\View
	 */
	public function faq()
	{
		$seminars = \Seminar::orderBy('start_at', 'desc')->paginate(5);

		$faqs = \Faq::all();
		return View::make('front.faq', compact('faqs', 'seminars'));
	}

	public function gallery()
	{
		$medias = Media::all();
		return View::make('front.gallery', compact('medias'));
	}

	/**
	 * News
	 *
	 * @return \Illuminate\View\View
	 */
	public function news()
	{
		$seminars = \Seminar::orderBy('start_at', 'desc')->paginate(5);

		$articles = \Article::orderBy('created_at', 'desc')->paginate(5);
		return View::make('front.news', compact('articles', 'seminars'))
			->with('pagination', $articles->links());
	}

	/**
	 * News single
	 *
	 * @return \Illuminate\View\View
	 */
	public function newsSingle($id)
	{
		$seminars = \Seminar::orderBy('start_at', 'desc')->paginate(5);
		$article = Article::find($id);

      	return View::make('front.news-single', compact('article', 'seminars'));
	}

	/**
	 * News single
	 *
	 * @return \Illuminate\View\View
	 */
	public function seminarSingle($id)
	{
		$seminar = Seminar::find($id);

      	return View::make('front.seminars-single', compact('seminar'));
	}

}
