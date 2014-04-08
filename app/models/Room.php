<?php
class Room extends Eloquent  {
	protected $table = 'rooms';
	 public function service(){
		return $this->belongsTo('services','service_id','id');
	}
         
	
}