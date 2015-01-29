<?php

class Article extends Eloquent
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }
}
