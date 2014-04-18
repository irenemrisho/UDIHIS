<?php
class Recommended_medicine extends Eloquent {
    protected $table = 'recommended_medicines';
	
	protected $guarded = array();

	 public function medicine(){
		return $this->belongsTo('medicines','medicine_id','id');
	}
        public function patients_visit(){
		return $this->belongsTo('patients_visits','pv_id','id');
	}
         
}