<?php

class UsersApiController extends BaseController
{
    /**
     * User login
     *
     * @param $username
     * @param $password
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        if (Request::ajax()) {

            $validate = Validator::make($data = Input::all(),
                [
                    'username' => 'required|email|min:5',
                    'password' => 'required|min:3'
                ]);

            $errorMessage = ['Invalid username/password'];

            if ($validate->fails()) {
                $errorMessage = $validate->errors()->all();

                return Response::json([
                    'status'    => 'error',
                    'message'   => $errorMessage
                ], 401);
            }

            $credentials = [
                'email' => $data['username'],
                'password' => $data['password']
            ];

            $attempt = Auth::attempt($credentials);

            if (Auth::check()) {
                return Response::json([
                    'status'    => 'success',
                    'message'   => 'Successfully logged in'
                ], 200);
            }

            return Response::json([
                'status'    => 'error',
                'message'   => $errorMessage
            ], 401);
        }

        return Response::json([
            'status'    => 'error',
            'message'   => 'Invalid request'
        ], 401);
    }

    public function register()
    {

    }
}