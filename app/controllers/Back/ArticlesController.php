<?php namespace Controllers\Back;

use Article;
use View;

class ArticlesController extends \BaseController
{
    /**
     * User Dashboard
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $articles = Article::all();
        return View::make('admin.articles.index', compact('users'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return View::make('admin.articles.create');
    }

    public function store()
    {
      $validator = Validator::make($data = Input::all(), Barangay::$rules);

      if ($validator->fails())
      {
        return Redirect::back()->withErrors($validator)->withInput();
      }

      Barangay::create($data);

      return Redirect::route('admin.articles.index');
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
      $articles = Article::find($id);

      return View::make('admin.articles.edit', compact('articles'));
    }

    public function update($id)
    {
      $articles = Article::findOrFail($id);

      $validator = Validator::make($data = Input::all(), Article::$rules);

      if ($validator->fails())
      {
        return Redirect::back()->withErrors($validator)->withInput();
      }

      $articles->update($data);

      return Redirect::route('admin.articles.index');
    }

    public function destroy()
    {
      Article::destroy($id);

      return Redirect::route('admin.articles.index');
    }
}
