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
}