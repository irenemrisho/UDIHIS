<?php


class Patient extends Eloquent{
	
	protected $table = 'patients';

	protected $guarded = array();
	
	public function user(){
		return $this->belongsTo('Users','user_id','id');
	}
	
        //add payment

	
}