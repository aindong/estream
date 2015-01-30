<?php namespace Controllers\Back;

use View;
use Seminar;
use Input;
use Redirect;

class SeminarsController extends \BaseController
{
    /**
     * Seminars
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $seminars = Seminar::all();

        return View::make('admin.seminars.index', compact('seminars'));
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


        $data = Input::all();

        Seminar::create($data);
        return Redirect::route('admin.seminars.index');
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
