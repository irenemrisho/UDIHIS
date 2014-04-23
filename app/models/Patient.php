<?php


class Patient extends Eloquent{
	
	protected $table = 'patients';

	protected $guarded = array();
	
	public function user(){
		return $this->belongsTo('Users','user_id','id');
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
	
}