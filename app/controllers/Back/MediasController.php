<?php namespace Controllers\Back;

use Media;
use View;
use Validator;
use Input;
use Redirect;
use Auth;

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
      $validator = Validator::make($data = Input::all(), Media::$rules);

      if ($validator->fails())
      {
        return Redirect::back()->withErrors($validator)->withInput();
      }

      Media::create($data);

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

    public function destroy()
    {
      Media::destroy($id);

      return Redirect::route('admin.medias.index');
    }
}
