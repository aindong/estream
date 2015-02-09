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
        $request = \WebcastRequest::where('user_id', '=', $user->id)->where('seminar_id', '=', $id)->get();

        if ($request->status == 'disapproved') {
            return \Redirect::back();
        }

        return View::make('webcast.seminar')
            ->with('seminar', $seminar);
    }

    public function webcastStatus($id, $status)
    {
        $request = \WebcastRequest::find($id);

        if (!empty($request)) {
            $request->status = $status;
            $request->save();
        }

        return \Redirect::back();
    }

    public function request($id, $seminar)
    {
        if (\Request::ajax()) {
            $request = new \WebcastRequest();
            $request->user_id = $id;
            $request->seminar_id = $seminar;
            $request->status = 'waiting';
            $request->save();

            return \Response::json(['status' => 'success', 'data' => $request], 200);
        }
        return \Response::json(['status' => 'error'], 400);
    }
}