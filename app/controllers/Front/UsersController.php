<?php namespace Controllers\Front;

use Auth;
use Redirect;
use View;

class UsersController extends \BaseController
{
    public function index()
    {
        $user = \User::join('users_info', 'users.id', '=', 'users_info.user_id', 'inner')
            ->where('users.id', Auth::getUser()->id)
            ->first();

        return View::make('user.dashboard', compact('user'));
    }

    /**
     * Register
     *
     * @return \Illuminate\View\View
     */
    public function register()
    {
        return View::make('front.register');
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
        $userInfo->gender                = $data['gender'];
        $userInfo->address               = $data['address'];
        $userInfo->save();

        // \AuditTrail::create([
        //     'user_id'   => \Auth::getUser()->id,
        //     'action'     => 'Updated a user with id '.$id
        // ]);

        return Redirect::back('/');
    }

    /**
     * Login
     *
     * @return \Illuminate\View\View
     */
    public function login()
    {
        if (Auth::check()) {
            return Redirect::to('/admin/dashboard');
        }

        return View::make('front.login');
    }

    /**
     * Logout
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {


        Auth::logout();

        return Redirect::to('/');
    }

    public function registerSeminar($id)
    {
        if (\Request::ajax()) {
            if (!Auth::check()) {
                return \Response::json(['message' => 'error'], 400);
            }

            $seminar = \SeminarUser::create([
               'user_id'     => \Auth::getUser()->id,
                'seminar_id' => $id,
                'status'     => 'waiting for payment'
            ]);

            $data = [
                'message' => [],
                'user' => \Auth::getUser(),
                'seminar' => $seminar
            ];

            \Event::fire('user.seminar.register', array($data));

            return \Response::json(['message' => 'success'], 200);
        }

        return \Response::json(['message' => 'error'], 400);
    }

    public function seminars()
    {
        $user = Auth::getUser();
        $seminarUsers = \SeminarUser::where('user_id', '=', $user->id)->get();

        $requests = \WebcastRequest::where('user_id', '=', $user->id)->get();

        return View::make('user.seminar', compact('seminarUsers', 'user'))
            ->with('requests', $requests);
    }
}