<?php

class Notification extends Eloquent {
	
        protected $table='noticeboard';
        public static $unguarded = true;
        
	public function user(){
		return $this->hasMany('Users','notification_id','id');

	}
}