<?php

class Report extends Eloquent{
	public static function generateDays($ar, $dep){
			$ar_time  = strtotime($ar);
			$dep_time = strtotime($dep);
			$dates    = array();
			$dates[]  = $ar; 
			$datediff = $dep_time - $ar_time;
     		$days     = floor($datediff/(60*60*24));
     		for($i=1; $i<=$days; $i++){
     			$ar_time   = $ar_time + (60*60*24);
     			$next_date = date('Y-m-d', $ar_time);
     			$dates[]   = $next_date;
     		}

     		return $dates;
	}
}