<?php namespace Controllers\Back;

class TestimonialsController extends \BaseController
{
    public function index()
    {
        $testimonials = \Testimonial::all();
        return \View::make('admin.testimonials.index', compact('testimonials'));
    }

    public function approve($id)
    {
        $testimonial = \Testimonial::find($id);
        $testimonial->status = 'approved';
        $testimonial->save();

        return \Redirect::back();
    }

    public function delete($id)
    {
        \Testimonial::destroy($id);

        return \Redirect::back();
    }
}