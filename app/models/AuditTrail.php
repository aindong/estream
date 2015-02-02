<?php

class AuditTrail extends \Eloquent
{
    protected $table = 'logs';

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }
}