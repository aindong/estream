<?php namespace Controllers\Front;

use View;
use Auth;
use Redirect;

class UsersController extends \BaseController
{
    /**
     * Register
     *
     * @return \Illuminate\View\View
     */
    public function register()
    {
        return View::make('front.register');
    }

    /**
     * Login
     *
     * @return \Illuminate\View\View
     */
    public function login()
    {
        if (Auth::check()) {
            return Redirect::to('/admin/dashboard');
        }

        return View::make('front.login');
    }

    /**
     * Logout
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();

        return Redirect::to('/');
    }
}