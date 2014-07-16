<?php

class Notification extends Eloquent {
	
        protected $table='noticeboard';
        public static $unguarded = true;
        
	public function user(){
		return $this->hasMany('User','notification_id','id');

	}
}