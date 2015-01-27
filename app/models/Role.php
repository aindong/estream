<?php

class Role extends Eloquent
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->hasMany('User');
    }
}