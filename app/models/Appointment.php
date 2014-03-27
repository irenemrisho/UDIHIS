<?php
use Illuminate\Auth\UserInterface;
class Appointment extends Eloquent implements UserInterface {
	protected $guarded=array('id');
	protected $fillable=array('date','amount','patient_id','user_id');

	public function user(){
		return $this->belongsTo('User','id');

	}
	public function patient(){
		return $this->belongsTo('Patient','patient_id','id');

	}
}