<?php namespace Controllers\Back;

use User;
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
        $users = User::all();
        return View::make('admin.users.index', compact('users'));
    }
}