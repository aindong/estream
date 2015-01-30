<?php

class Article extends Eloquent
{
    protected $guarded = ['id'];

    public static $rules = [
    // 'title' => 'required'
    ];

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }
}
