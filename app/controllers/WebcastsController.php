<?php

class WebcastsController extends BaseController
{
    public function index()
    {
        return View::make('webcast.index');
    }

    public function client()
    {
        return View::make('webcast.client');
    }
}