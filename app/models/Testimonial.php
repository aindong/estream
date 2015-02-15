<?php

class Testimonial extends Eloquent
{
    protected $table = 'testimonials';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }
}