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

        $user = \Auth::getUser();

        if($user->role_id != 2) {
            $request = \WebcastRequest::where('user_id', '=', $user->id)->where('seminar_id', '=', $id)->first();

            if ($request->status == 'disapproved') {
                return \Redirect::back();
            }
        }

        return View::make('webcast.seminar')
            ->with('seminar', $seminar);
    }

    public function webcastStatus($id, $status)
    {
        $request = \WebcastRequest::find($id);
        $request->status = $status;
        $request->save();

        $payload = ["user" => $request->id];
        \Event::fire('user.webcast.status', array($payload));

        return \Redirect::back();
    }

    public function request($id, $seminar)
    {
        if (\Request::ajax()) {

            $check = \WebcastRequest::where('user_id', '=', $id)->where('seminar_id', '=', $seminar)->first();
            if(!is_null($check)) {
                return \Response::json(['status' => 'error', 'message' => 'request already made'], 400);
            }

            $request = new \WebcastRequest();
            $request->user_id = $id;
            $request->seminar_id = $seminar;
            $request->status = 'waiting';
            $request->save();

            return \Response::json(['status' => 'success', 'data' => $request], 200);
        }
        return \Response::json(['status' => 'error', 'message' => 'bad request'], 400);
    }
}