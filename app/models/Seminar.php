<?php

class Seminar extends \Eloquent {
	protected $guarded = ['id'];

	public function attendees()
	{
		return $this->hasMany('SeminarUser');
	}
}
