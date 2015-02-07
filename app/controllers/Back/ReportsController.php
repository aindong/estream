<?php namespace Controllers\Back;

class ReportsController extends \BaseController
{
    public function index()
    {
        $seminars = \Seminar::where('end_at', '<', new \DateTime('today'))->get();

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

        return \View::make('admin.reports.index', compact('seminars'));
    }

    public function show($id)
    {
        $seminar = \Seminar::find($id);
        return \View::make('admin.reports.show', compact('seminar'));
    }
}