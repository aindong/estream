<?php namespace Controllers\Back;

use Hash;
use Input;
use Redirect;
use User;
use UsersInfo;
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
        $data = Input::all();

        $user = new User;
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->role_id = $data['role_id'];
        $user->save();

        $userInfo = new UsersInfo();
        $userInfo->create([
            'user_id'               => $user->id,
            'first_name'            => $data['first_name'],
            'last_name'             => $data['last_name'],
            'middle_name'           => $data['middle_name'],
            'membership'            => $data['membership'],
            'membership_expire_at'  => date('Y-m-d', strtotime($data['membership_expire_at']))
        ]);

        // \AuditTrail::create([
        //     'user_id'   => \Auth::getUser()->id,
        //     'action'     => 'Created a new user'
        // ]);

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
        $userInfo->first_name            = $data['first_name'];
        $userInfo->last_name             = $data['last_name'];
        $userInfo->middle_name           = $data['middle_name'];
        $userInfo->membership            = $data['membership'];
        $userInfo->membership_expire_at  = date('Y-m-d', strtotime($data['membership_expire_at']));
        $userInfo->contactnumber         = $data['contactnumber'];
        $userInfo->save();

        // \AuditTrail::create([
        //     'user_id'   => \Auth::getUser()->id,
        //     'action'     => 'Updated a user with id '.$id
        // ]);

        return Redirect::route('admin.users.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user->role->name == 'admin') {
            Session::flash('error', 'Sorry but you cant delete an admin account');
            return Redirect::back();
        }

        User::destroy($id);

        // Delete user info
        $userinfo = \UsersInfo::where('user_id', '=', $id)->delete();

        // Delete user logs
        $logs = \AuditTrail::where('user_id', '=', $id)->delete();

        // Delete articles
        $articles = \Article::where('user_id', '=', $id)->delete();

        // Delete user seminars
        $seminars = \SeminarUser::where('user_id', '=', $id)->delete();

        // Delete webcast request
        $webcast = \WebcastRequest::where('user_id', '=', $id)->delete();

        // Delete medias
        $medias = \Media::where('user_id', '=', $id)->delete();


        // \AuditTrail::create([
        //     'user_id'   => Auth::getUser()->id,
        //     'action'     => 'Deleted an article with id of '. $id
        // ]);

        return Redirect::route('admin.users.index');
    }
}