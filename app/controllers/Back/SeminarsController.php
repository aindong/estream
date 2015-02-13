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
        $destination  = public_path() . '/public/uploads/invitation/';
        $destination2 = public_path() . '/public/uploads/seminar/';

        $data = Input::all();
        $data['start_at'] = date('Y-m-d', strtotime($data['start_at']));
        $data['end_at']   = date('Y-m-d', strtotime($data['end_at']));
//        print_r($data);exit;

        $seminar = new Seminar();
        $seminar->title = $data['title'];
        $seminar->description = $data['description'];
        $seminar->price = $data['price'];
        $seminar->location = $data['location'];
        $seminar->long = $data['long'];
        $seminar->lat = $data['lat'];

        if (Input::hasFile('invitation')) {
            $invitation = Input::file('invitation');
            $filename = uniqid() . '-' . time() . '-' . $invitation->getClientOriginalName();
            $invitation->move($destination, $filename);
            $seminar->invitation = $filename;
        }

        if (Input::hasFile('image')) {
            $image = Input::file('image');
            $filename2 = uniqid() . '-' . time() . '-' . $image->getClientOriginalName();
            $image->move($destination2, $filename2);
            $seminar->image = $filename2;
        }

        $seminar->start_at = $data['start_at'];
        $seminar->end_at = $data['end_at'];
        $seminar->save();


//        \AuditTrail::create([
//            'user_id'   => \Auth::getUser()->id,
//            'action'     => 'Created a new seminar'
//        ]);
        $payload = ["id" => $seminar->id];
        \Event::fire('seminar.created', array($payload));

        return Redirect::route('admin.seminars.index');
    }

    /**
     * Edit
     * Edit an existing seminar
     */
    public function edit($id)
    {
        $seminar = Seminar::find($id);
        return View::make('admin.seminars.edit')
            ->with('seminar', $seminar);
    }

    public function show($id)
    {
        $downloadables = \Downloadable::where('seminar_id', '=', $id)->get();
        $seminar = Seminar::find($id);
        $webcastRequests = \WebcastRequest::where('seminar_id', '=', $id)->get();

        return View::make('admin.seminars.show', compact('seminar'))
            ->with('downloadables', $downloadables)
            ->with('webcastRequests', $webcastRequests);
    }

    public function updateStatus($id, $status)
    {
        $userSeminar = \SeminarUser::where('user_id', '=', $id)->first();
        $userSeminar->status = $status;
        $userSeminar->save();

        return \Redirect::back();
        //return \Response::json(['message' => 'success'], 200);
    }

    /**
     * Update
     */
    public function update($id)
    {
        $destination  = public_path() . '/public/uploads/invitation/';
        $destination2 = public_path() . '/public/uploads/seminar/';

        $data = Input::all();
        $data['start_at'] = date('Y-m-d', strtotime($data['start_at']));
        $data['end_at']   = date('Y-m-d', strtotime($data['end_at']));
//        print_r($data);exit;

        $seminar = Seminar::find($id);
        $seminar->title = $data['title'];
        $seminar->description = $data['description'];
        $seminar->price = $data['price'];
        $seminar->location = $data['location'];
        $seminar->long = $data['long'];
        $seminar->lat = $data['lat'];

        if (Input::hasFile('invitation')) {
            $invitation = Input::file('invitation');
            $filename = uniqid() . '-' . time() . '-' . $invitation->getClientOriginalName();
            $invitation->move($destination, $filename);
            $seminar->invitation = $filename;
        }

        if (Input::hasFile('image')) {
            $image = Input::file('image');
            $filename2 = uniqid() . '-' . time() . '-' . $image->getClientOriginalName();
            $image->move($destination2, $filename2);
            $seminar->image = $filename2;
        }

        $seminar->start_at = $data['start_at'];
        $seminar->end_at = $data['end_at'];
        $seminar->save();

        return Redirect::route('admin.seminars.index');
    }

    /**
     * Destroy
     */
    public function destroy($id)
    {
        Seminar::destroy($id);

        // Delete seminar users
        $users = \SeminarUser::where('seminar_id', '=', $id)->delete();

        // Delete webcast
        $webcast = \WebcastRequest::where('seminar_id', '=', $id)->delete();

        // Delete downloadables
        $downloadables = \Downloadable::where('seminar_id', '=', $id)->delete();

        // \AuditTrail::create([
        //     'user_id'   => Auth::getUser()->id,
        //     'action'     => 'Deleted an article with id of '. $id
        // ]);

        return \Redirect::route('admin.seminars.index');
    }
}
