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

	public static function listTests($lab_id, $prefix){
		$tests       = Laboratory::find($lab_id)->test_type;
	
	    $testsArr    = explode(",", $tests);
		
		$testsArray  = array();

		foreach ($testsArr as $test) {

			$start              = strpos($test, "_");
			$test_type_value	= substr($test, $start+1);
			$test_type_key      = substr($test, 0, $start);
			if($test_type_key   == $prefix){
				$testsArray[]   = $test_type_value;
			}
		}
			$results = "<ul>";
		foreach ($testsArray as $testItem) {
			$results .= "<li>".$testItem."</li>";
		}
			$results .= "</ul>";

			return $results;
	}
        
    public function Service(){
		return $this->belongsTo('services','service_id','id');

	}
}