<?php namespace Controllers\Back;

use View;

class LogsController extends \BaseController
{
    public function index()
    {
        return View::make('admin.logs.index');
    }
}