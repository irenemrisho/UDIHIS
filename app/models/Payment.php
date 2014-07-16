<?php

class Payment extends Eloquent{
	
	protected $table = 'payments';
	
	protected $guarded = array();

        public function patient_visit(){
		return $this->belongsTo('Patient_visits','patient_id','id');
	}
        //add payment
        public function service(){
		return $this->belongsTo('Service','service_id','id');
	}
	
}

