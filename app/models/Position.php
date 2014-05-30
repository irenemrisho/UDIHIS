<?php

 class Position extends Eloquent{

     protected $table = 'position';
     protected $guarded = array();

     public function position(){
         return $this->hasMany('persons','postion_id','id');
     }

 }