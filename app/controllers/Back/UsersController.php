<?php namespace Controllers\Back;

use View;

class UsersController extends \BaseController
{
    /**
     * User Dashboard
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return View::make('user.dashboard');
    }
}