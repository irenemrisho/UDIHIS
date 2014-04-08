<?php

class Appointment extends Eloquent {
	
        protected $table='appointments';
        
	public function user(){
		return $this->belongsTo('Users','doctor_id','id');

	}
	public function patient(){
		return $this->belongsTo('Patients','patient_id','id');

	}
}