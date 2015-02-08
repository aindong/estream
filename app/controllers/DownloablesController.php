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

    public function store()
    {

        return View::make('admin.downloadables.create');
    }

    public function destroy($id)
    {

        return View::make('admin.downloadables.create');
    }
}