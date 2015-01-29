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

    /**
     * Create
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
      return View::make('admin.seminars.create');
    }

    public function store()
    {

    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}
