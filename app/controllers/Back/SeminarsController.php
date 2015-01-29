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

    /**
     * Store
     * Create a new seminar
     */
    public function store()
    {
      
    }

    /**
     * Edit
     * Edit an existing seminar
     */
    public function edit($id)
    {
        return View::make('admin.seminars.edit');
    }

    /**
     * Update
     */
    public function update($id)
    {

    }

    /**
     * Destroy
     */
    public function destroy($id)
    {

    }
}
