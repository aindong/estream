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

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return View::make('admin.users.create');
    }

    public function store()
    {

    }

    public function edit($id)
    {
        $user = User::join('users_info', 'users.id', '=', 'users_info.user_id', 'inner')
            ->where('users.id', $id)
            ->first();

        return View::make('admin.users.edit', compact('user'));
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}