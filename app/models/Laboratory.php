<?php

class Laboratory extends Eloquent implements UserInterface {
        
        protected $table='laboratories';
    
	public function user(){
		return $this->belongsTo('Users','user_id','id');

	}
	public function patient_visit(){
		return $this->belongsTo('patient_visits','pv_id','id');

	}
        
        public function Service(){
		return $this->belongsTo('services','service_id','id');

	}
}