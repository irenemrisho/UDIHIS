<?php


class Patient extends Eloquent{
	
	protected $table = 'patients';

	protected $guarded = array();
	
	public function user(){
		return $this->belongsTo('Users','user_id','id');
	}
	public function patient_visit(){
		return $this->hasMany('patient_visit','patient_id','id');
	}
	
        //add payment
	public static function fileno(){
		//check if table empty
		$count = Patient::count();
		if($count == 0){
			$in_file_nber = "10000000";	
			return $in_file_nber;	
		}else{
			$in_file_nber = (integer)Patient::max('filenumber') + 1;
			return $in_file_nber;	
		}

	}

	public static function getNo($g, $vs){
		if($g=="all"){
			return count($vs);
		}else if($g=="male"){
			$c = 0;
			foreach ($vs as $v) {
				$pid    = $v->patient_id;
				$gender = Patient::find($pid)->gender;
				if($gender == "Male"){
					$c++;
				} 
			}
			return $c;
		}else{
			$c = 0;
			foreach ($vs as $v) {
				$pid    = $v->patient_id;
				$gender = Patient::find($pid)->gender;
				if($gender == "Female"){
					$c++;
				} 
			}
			return $c;
		}
	}

	public static function fullname(Patient $p){
		return $p->firstname . " " . $p->lastname;
	}
	
}