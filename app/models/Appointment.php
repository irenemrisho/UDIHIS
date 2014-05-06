<?php

class Appointment extends Eloquent {
	
        protected $table='appointments';
        public static $unguarded = true;
        
	public function user(){
		return $this->belongsTo('Users','doctor_id','id');

	}
	public function user1(){
		return $this->belongsTo('Users','room_no','id');

	}
	public function patient(){
		return $this->belongsTo('Patients','patient_id','id');

	}
}