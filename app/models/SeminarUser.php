<?php

class SeminarUser extends \Eloquent {
	protected $table = 'seminar_users';
	protected $guarded = ['id'];

	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}

	public function seminar()
	{
		return $this->belongsTo('Seminar', 'seminar_id');
	}
}