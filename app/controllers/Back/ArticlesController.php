<?php namespace Controllers\Back;

use Article;
use Auth;
use Input;
use Redirect;
use Validator;
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

        return View::make('admin.articles.index', compact('articles'));
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
      $validator = Validator::make($data = Input::all(), Article::$rules);

      if ($validator->fails())
      {
        return Redirect::back()->withErrors($validator)->withInput();
      }
      $data['user_id'] = Auth::user()->id;
      Article::create($data);

        \AuditTrail::create([
            'user_id'   => Auth::getUser()->id,
            'action'     => 'Created a new article'
        ]);

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

        \AuditTrail::create([
            'user_id'   => Auth::getUser()->id,
            'action'     => 'Updated an article with id of '.$id
        ]);

      return Redirect::route('admin.articles.index');
    }

    public function destroy($id)
    {
      Article::destroy($id);

        \AuditTrail::create([
            'user_id'   => Auth::getUser()->id,
            'action'     => 'Deleted an article with id of '. $id
        ]);

      return Redirect::route('admin.articles.index');
    }
}
