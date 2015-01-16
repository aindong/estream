<?php

class UsersController extends BaseController
{
    public function register()
    {
        return View::make('front.register');
    }

    public function login()
    {
        return View::make('front.login');
    }
}