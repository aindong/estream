<?php namespace Controllers\Back;

use Faq;
use Input;
use Redirect;
use Validator;
use View;

class FaqsController extends \BaseController
{
    /**
     * User Dashboard
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $faqs = Faq::all();

        return View::make('admin.faqs.index', compact('faqs'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return View::make('admin.faqs.create');
    }

    public function store()
    {
      $validator = Validator::make($data = Input::all(), Faq::$rules);

      if ($validator->fails())
      {
        return Redirect::back()->withErrors($validator)->withInput();
      }

      Faq::create($data);

        \AuditTrail::create([
            'user_id'   => Auth::getUser()->id,
            'action'     => 'Created a new faq'
        ]);

      return Redirect::route('admin.faqs.index');
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
      $faqs = Faq::find($id);

      return View::make('admin.faqs.edit', compact('faqs'));
    }

    public function update($id)
    {
      $faqs = Faq::findOrFail($id);

      $validator = Validator::make($data = Input::all(), Faq::$rules);

      if ($validator->fails())
      {
        return Redirect::back()->withErrors($validator)->withInput();
      }

      $faqs->update($data);

        \AuditTrail::create([
            'user_id'   => Auth::getUser()->id,
            'action'     => 'Updated a faq with an id of '.$id
        ]);

      return Redirect::route('admin.faqs.index');
    }

    public function destroy($id)
    {
      Faq::destroy($id);

        \AuditTrail::create([
            'user_id'   => Auth::getUser()->id,
            'action'     => 'Deleted a faq with an id of '.$id
        ]);

      return Redirect::route('admin.faqs.index');
    }
}
