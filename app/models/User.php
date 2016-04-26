<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected static $ROLEID = ['ADMIN','GUEST'];
	

	public static $rules = array(
	    // 'first_name'      => 'required|max:100',
	    // 'last_name'       => 'required|max:100',
	    'email'      => 'required|email',
	    'password'       => 'required|max:100'
	    // 'profile_img'       => 'required|max:100',

	);

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function posts()
	{
		return $this->hasMany('Post');
	}
	public function getRoleIdAttribute($value)
	{
		return static::$ROLEID[($value-1)];
	}
	public function setRoleIdAttribute($value)
	{
		$this->attributes['role_id'] = array_search($value,static::$ROLEID)+1;
	}
	public function setPasswordAttribute($value)
	{
	    $this->attributes['password'] = Hash::make($value);
	}
	public function setFisrtNameAttribute($value)
	{
		$this->attributes['first_name'] = strtolower($value);
	}

}
