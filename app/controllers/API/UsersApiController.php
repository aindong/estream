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
                if (Auth::getUser()->role->name == 'admin') {
                    $link = '/admin/dashboard';
                } else {
                    $link = '/users/dashboard';
                }

                $membership = Auth::getUser()->info->membership;
                $membership_expire_at = strtotime(Auth::getUser()->info->membership_expire_at);
                $today = time();

                if ($membership_expire_at < $today) {
                    $userinfo = UsersInfo::find(Auth::getUser()->id);
                    $userinfo->membership = 'regular';
                    $userinfo->membership_expire_at = 0;
                    $userinfo->save();
                }

                AuditTrail::create([
                    'user_id'   => Auth::getUser()->id,
                    'action'     => 'Logged in'
                ]);
                return Response::json([
                    'status'        => 'success',
                    'message'       => 'Successfully logged in',
                    'membership'    => ['membership' => $membership, 'membership_expire_at' => $membership_expire_at, 'today' => $today],
                    'link'          => $link
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
        ], 400);
    }

    public function register()
    {
        if (!Request::ajax()) {
            return Response::json([
                'status'    => 'error',
                'message'   => 'Invalid request'
            ], 404);
        }

        $validate = Validator::make($data = Input::all(), [
            'first_name' => 'required|min:3',
            'last_name'  => 'required|min:3',
            'email'      => 'required|email|min:5',
            'password'   => 'required|min:5'
        ]);

        if ($validate->fails()) {
            $errorMessage = $validate->errors()->all();

            return Response::json([
                'status'    => 'error',
                'message'   => $errorMessage
            ], 400);
        }

        $user = new User();
        $user->email    = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();

        $userInfo = new UsersInfo();
        $userInfo->user_id    = $user->id;
        $userInfo->first_name = $data['first_name'];
        $userInfo->last_name  = $data['last_name'];
        $userInfo->save();

        $message = [
            'data' => [
                'user'      => $user,
                'user_info' => $userInfo
            ],
            'message' => 'Registration successful'
        ];

        $data = ['user' => $user, 'info' => $userInfo];

        Event::fire('user.register', $data);

        return Response::json([
            'status'    => 'success',
            'message'   => $message
        ], 201);
    }
}