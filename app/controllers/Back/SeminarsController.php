<?php namespace Controllers\Back;

use View;
use Seminar;

class SeminarsController extends \BaseController
{
    /**
     * Seminars
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return View::make('admin.seminars.index');
    }

}