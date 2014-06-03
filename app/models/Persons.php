<?php

class Persons extends Eloquent{

    protected $table = 'persons';
    protected $guarded = array();

    public function person(){
        return $this->belongsTo('position','position_id','id');
    }
}