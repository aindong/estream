<?php namespace Controllers\Front;

use Auth;
use Redirect;
use View;

class UsersController extends \BaseController
{
    public function index()
    {
        $current = Auth::getUser();


        $user = \User::join('users_info', 'users.id', '=', 'users_info.user_id', 'inner')
            ->where('users.id', $current->id)
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
        $seminarUsers = \SeminarUser::where('user_id', '=', $user->id)->orderBy('id', 'desc')->get();

        $requests = \WebcastRequest::where('user_id', '=', $user->id)->get();

        return View::make('user.seminar', compact('seminarUsers', 'user'))
            ->with('requests', $requests);
    }

    public function cancelSeminar($id)
    {
        \SeminarUser::where('seminar_id', '=', $id)->where('user_id', '=', Auth::getUser()->id)->delete();
        \WebcastRequest::where('seminar_id', '=', $id)->where('user_id', '=', Auth::getUser()->id)->delete();
        return Redirect::back();
    }

    public function updateUser($id)
    {
        if (Auth::getUser()->id == $id) {
            $data = \Input::all();

            $user = \User::findOrFail($id);
            $user->email    = $data['email'];
            $user->save();

            $userInfo = \UsersInfo::where('user_id', '=', $id)->first();
            $userInfo->first_name       = $data['first_name'];
            $userInfo->last_name        = $data['last_name'];
            $userInfo->contactnumber    = $data['contactnumber'];
            $userInfo->gender           = $data['gender'];
            $userInfo->birthdate        = $data['birthdate'];
            $userInfo->contactnumber    = $data['contactnumber'];
            $userInfo->address          = $data['address'];

            $userInfo->save();
            \Session::flash('profile_success', 'Successfully updated the user profile');
        } else {
            \Session::flash('profile_error', 'Failed to updated the user profile');
        }

        return Redirect::back();
    }

    public function updatePassword($id)
    {
        if (Auth::getUser()->id == $id) {
            $data = \Input::all();

            $user = \User::find($id);

            if ($data['newpassword'] == $data['confirmpassword']) {
                if (\Hash::check($data['oldpassword'], $user->password)) {
                    $user->password    = \Hash::make($data['newpassword']);
                    $user->save();

                    \Session::flash('password_success', 'Successfully changed the password');
                } else {
                    \Session::flash('password_error', 'Failed to changed the password. Check your password.');
                }
            } else {
                \Session::flash('password_error', 'Confirmation password and New password does not match');
            }
        }

        return Redirect::back();
    }

    public function updatePicture($id)
    {
        if (Auth::getUser()->id == $id) {
            $destination = public_path() . '/public/uploads/user';

            if (\Input::hasFile('picture')) {
                $picture = \Input::file('picture');
                $filename = uniqid() . '-' . time() . '-' . $picture->getClientOriginalName();
                $picture->move($destination, $filename);

                $user = \UsersInfo::where('user_id', '=', $id)->first();
                $user->picture = $filename;
                $user->save();
            }
            //print_r(\Input::all());exit;
        }

        return Redirect::back();
    }

    public function testimonials()
    {
        return View::make('user.testimonials');
    }

    public function postTestimonials()
    {
        $data = \Input::all();

        $testi = new \Testimonial();
        $testi->user_id = Auth::getUser()->id;
        $testi->testi   = $data['testimonial'];
        $testi->status  = 'waiting';
        $testi->save();

        return Redirect::to('/users/dashboard');
    }
}