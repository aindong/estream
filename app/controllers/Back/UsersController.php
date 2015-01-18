<?php namespace Controllers\Back;

use View;

class UsersController extends \BaseController
{
    /**
     * Admin Dashboard
     *
     * @return \Illuminate\View\View
     */
    public function adminDashboard()
    {
        return View::make('admin.dashboard');
    }

    /**
     * User Dashboard
     *
     * @return \Illuminate\View\View
     */
    public function userDashboard()
    {
        return View::make('user.dashboard');
    }
}