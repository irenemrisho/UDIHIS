<?php
use Illuminate\Auth\UserInterface;
class Patients_visit extends Eloquent implements UserInterface {
	protected $table = 'Patients_visit';
	protected $guarded=array('id');
	protected $fillable=array('user_id','medicine_id','account_id','room_id','consultation','weight','disease','admission_date','discharge_date');

	public function user(){
		return $this->belongsTo('Users','user_id','id');

	}
	public function patient(){
		return $this->belongsTo('Patients','patient_id','id');

	}
}