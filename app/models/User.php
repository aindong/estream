<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $guarded = ['id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function role()
	{
		return $this->belongsTo('Role', 'role_id');
	}

	public function info()
	{
		return $this->hasOne('UsersInfo');
	}

	public function article()
	{
		return $this->hasOne('Article');
	}

	public function media()
	{
		return $this->hasOne('Media');
	}

	public function logs()
	{
		return $this->hasMany('AuditTrail');
	}
}
