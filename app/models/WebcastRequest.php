<?php

class WebcastRequest extends Eloquent
{
    protected $guarded = ['id'];

    protected $table = 'seminars_webcast';

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }

}