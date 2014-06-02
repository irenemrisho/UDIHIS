<?php

 class Position extends Eloquent{

     protected $table = 'position';
     protected $guarded = array();

     public function position(){
         return $this->hasMany('Persons','postion_id','id');
     }

 }