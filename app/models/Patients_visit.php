<?php

class Patients_visit extends Eloquent  {
	protected $table = 'patients_visits';
    protected $guarded = array();
	
	public function user(){
		return $this->belongsTo('Users','doctor_id','id');

	}
	public function patient(){
		return $this->belongsTo('Patients','patient_id','id');

	}
        public function medicine(){
		return $this->belongsTo('medicines','medicine_id','id');

	}
         public function room(){
		return $this->belongsTo('rooms','room_id','id');

	}

	public static function fullname(Patient $p){
		return $p->firstname . " " . $p->lastname;
}
}