<?php

class DownloadablesController extends BaseController
{
    public function index()
    {
        //return View::make('admin.downloadables.');
    }

    public function download($id)
    {

        return View::make('admin.downloadables.create');
    }

    public function create()
    {

        return View::make('admin.downloadables.create');
    }

    public function store($id)
    {
        if (!Input::hasFile('invitation')) {
            return \Redirect::back();
        }

        $destination = public_path() . '/public/uploads/downloadables/';

        $file = Input::file('file');
        $filename = uniqid() . '-' . time() . '-' . $file->getClientOriginalName();
        $file->move($destination, $filename);
        $file->invitation = $filename;

        $downloadable = new \Downloadable();
        $downloadable->seminar_id = $id;
        $downloadable->name = Input::get('name');
        $downloadable->filename = $filename;
        $downloadable->save();

        return View::make('admin.downloadables.create');
    }

    public function destroy($id)
    {

        return View::make('admin.downloadables.create');
    }
}