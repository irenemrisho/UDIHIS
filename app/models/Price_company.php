<?php

class Price_company extends Eloquent {

    protected $table = 'price_companies';
	protected $guarded = array();

	 public function Service(){
		return $this->belongsTo('Services','service_id','id');
	}
     
     public function Campany(){
		return $this->belongsTo('insuranceCompanies','campany_id','id');
	}  
         
}