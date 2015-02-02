<?php

class AuditTrail extends \Eloquent
{
    protected $table = 'logs';

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }
}