<?php
use Illuminate\Auth\UserInterface;
class Laboratory extends Eloquent implements UserInterface {
	protected $guarded=array('id');
	protected $fillable=array('test_type','result','date','service_id','user_id','patientsVisit_id');

	public function user(){
		return $this->belongsTo('Users','user_id','id');

	}
	public function patient(){
		return $this->belongsTo('Patients','patient_id','id');

	}
}