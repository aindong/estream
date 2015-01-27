<?php namespace Controllers\Back;

use View;

class AdminController extends \BaseController
{
    /**
     * Admin Dashboard
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return View::make('admin.dashboard');
    }

    /**
     * Users Management
     *
     * @return \Illuminate\View\View
     */
    public function users()
    {
        return View::make('admin.users.index');
    }
}