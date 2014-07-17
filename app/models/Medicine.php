<?php


class Medicine extends Eloquent  {
       public static $unguarded = true;
	protected $table='medicines';
        public static $rules=array(
            'Medicine_name'=>'required|alpha_num,min:1',
            'Butch_number'=>'required|alpha_num',
            'Price'=>'required|integer',
            'Manufactured_date'=>'required|Date',
            'Expire_date'=>'required|Date',
            'Quantity'=>'required|integer',
        );
        public static function Validate($data){
            return Validator::make($data,static::$rules);
        }
 
	

        }


