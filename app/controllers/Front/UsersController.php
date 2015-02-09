<?php namespace Controllers\Front;

use Auth;
use Redirect;
use View;

class UsersController extends \BaseController
{
    public function index()
    {
        $user = Auth::getUser();
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
        $seminarUsers = \SeminarUser::all();
        return View::make('user.seminar', compact('seminarUsers'));
    }
}