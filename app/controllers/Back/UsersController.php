<?php namespace Controllers\Back;

use User;
use View;
use Input;
use Redirect;

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

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $user = User::join('users_info', 'users.id', '=', 'users_info.user_id', 'inner')
            ->where('users.id', $id)
            ->first();

        return View::make('admin.users.edit', compact('user'));
    }

    public function update($id)
    {
        $user = User::findOrFail($id);

        $data = Input::all();

        $user->update([
            'email' => $data['email'],
            'password' => $data['password']
        ]);

        $userInfo = \UsersInfo::where('user_id', $id)->first();
        $userInfo->update([
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'middle_name'   => $data['middle_name']
        ]);

        return Redirect::route('admin.users.index');
    }

    public function destroy()
    {

    }
}