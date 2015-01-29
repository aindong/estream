<?php namespace Controllers\Back;

use User;
use UsersInfo;
use View;
use Input;
use Redirect;
use Hash;

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
        $data = Input::all();

        $user = new User;
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();

        $userInfo = new UsersInfo();
        $userInfo->create([
            'user_id'       => $user->id,
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'middle_name'   => $data['middle_name']
        ]);

        return Redirect::route('admin.users.index');
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
        $data = Input::all();

        $user = User::find($id);
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();

        $userInfo = UsersInfo::where('user_id', $id)->first();
        $userInfo->first_name  = $data['first_name'];
        $userInfo->last_name   = $data['last_name'];
        $userInfo->middle_name = $data['middle_name'];
        $userInfo->save();

        return Redirect::route('admin.users.index');
    }

    public function destroy()
    {

    }
}