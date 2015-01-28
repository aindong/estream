<?php namespace Controllers\Back;

use View;
use User;

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
        $users = User::all();
        return View::make('admin.users.index', compact('users'));
    }

    public function seminars()
    {
        return View::make('admin.seminars.index');
    }
}