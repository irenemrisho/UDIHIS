<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Patient extends Eloquent implements UserInterface, RemindableInterface {
	
	protected $table = 'Patients';
	protected $guarded = array('id');
	protected $fillable = array('first_name','middle_name','last_name','gender','birth_date','address','contact');

	public function user(){
		return $this->belongsTo('Users','user_id','id');
	}
	public function appointment(){
		return $this->hasMany('Appointments','doctor_id','id');
	}
	

	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}
}