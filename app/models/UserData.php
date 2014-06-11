<?php

class UserData extends Eloquent {

    protected $table='user_data';
    public static $unguarded = true;

    public function user(){
        return $this->belongsTo('Users','user_id','id');

    }

}