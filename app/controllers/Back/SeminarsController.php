<?php namespace Controllers\Back;

use Input;
use Redirect;
use Seminar;
use View;

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

        if (\Request::ajax()) {
            $results = [];

            foreach ($seminars as $seminar) {
                $results[] = [
                    'title' => $seminar->title,
                    'start' => $seminar->start_at,
                    'end'   => $seminar->end_at
                ];
            }

            return \Response::json($results, 200);
        }

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
        $data['start_at'] = date('Y-m-d', strtotime($data['start_at']));
        $data['end_at']   = date('Y-m-d', strtotime($data['end_at']));
//        print_r($data);exit;
        Seminar::create($data);

        \AuditTrail::create([
            'user_id'   => \Auth::getUser()->id,
            'action'     => 'Created a new seminar'
        ]);

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

    public function show($id)
    {
        $seminar = Seminar::find($id);
        return View::make('admin.seminars.show', compact('seminar'));
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
