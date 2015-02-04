<?php

class Seminar extends \Eloquent {
	protected $guarded = ['id'];

	public function seminarUsers()
	{
		return $this->hasMany('SeminarUser');
	}
}
