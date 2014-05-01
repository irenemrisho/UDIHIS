<?php

class Payment extends Eloquent{
	
	protected $table = 'payments';
<<<<<<< HEAD
    public static $unguarded = true;
	
=======
>>>>>>> 9ffa5d1d2ca4024db5ac913705c08827fd26729d
	
	protected $guarded = array();

        public function patient_visit(){
		return $this->belongsTo('Patient_visits','patient_id','id');
	}
        //add payment
        public function service(){
		return $this->belongsTo('Service','service_id','id');
	}
	
}

