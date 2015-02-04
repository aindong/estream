<?php namespace Controllers\Front;

use Auth;
use Redirect;
use View;

class UsersController extends \BaseController
{
    public function index()
    {
        return View::make('user.dashboard');
    }

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
        \AuditTrail::create([
            'user_id'   => Auth::getUser()->id,
            'action'     => 'User logged out'
        ]);

        Auth::logout();

        return Redirect::to('/');
    }
}