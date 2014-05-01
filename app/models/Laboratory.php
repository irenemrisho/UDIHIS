<?php

class Laboratory extends Eloquent{
        
        protected $table='laboratories';

        protected $guarded = array();
    
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