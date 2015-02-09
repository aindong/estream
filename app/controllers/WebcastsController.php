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

    public function seminar($id)
    {
        $seminar = \Seminar::find($id);
        return View::make('webcast.seminar')
            ->with('seminar', $seminar);
    }
}