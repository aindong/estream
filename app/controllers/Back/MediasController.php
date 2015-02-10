<?php namespace Controllers\Back;

use Auth;
use Input;
use Media;
use Redirect;
use Validator;
use View;

class MediasController extends \BaseController
{
    /**
     * User Dashboard
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $medias = Media::all();

        return View::make('admin.medias.index', compact('medias'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return View::make('admin.medias.create');
    }

    public function store()
    {
        $destination = public_path() . '/public/uploads/gallery/';

        $validator = Validator::make($data = Input::all(), Media::$rules);

        if ($validator->fails())
        {
          return Redirect::back()->withErrors($validator)->withInput();
        }

        if (!Input::hasFile('file')) {
            \Session::flash('error', 'Error on uploading the image');
            return Redirect::back();
        }

        $file = Input::file('file');

        $filename = uniqid() . '-' . time() . '-' . $file->getClientOriginalName();
        $file->move($destination, $filename);

        $media = new Media();
        $media->type    = 'image';
        $media->user_id = Auth::getUser()->id;
        $media->file    = $filename;
        $media->save();

        return Redirect::route('admin.medias.index');
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
      $medias = Media::find($id);

      return View::make('admin.medias.edit', compact('medias'));
    }

    public function update($id)
    {
      $medias = Media::findOrFail($id);

      $validator = Validator::make($data = Input::all(), Media::$rules);

      if ($validator->fails())
      {
        return Redirect::back()->withErrors($validator)->withInput();
      }

      $medias->update($data);

      return Redirect::route('admin.medias.index');
    }

    public function destroy($id)
    {
      Media::destroy($id);

      return Redirect::route('admin.medias.index');
    }

    public function show($id)
    {

    }
}
