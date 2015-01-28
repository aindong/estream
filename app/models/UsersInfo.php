<?php

class UsersInfo extends Eloquent
{
    protected $table = 'users_info';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }
}