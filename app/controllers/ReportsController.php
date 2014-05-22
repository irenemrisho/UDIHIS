<?php

class ReportsController extends \BaseController {

	public function generateReports(){
		$inputs   = Input::all();
		$from     = $inputs['from'];
		$to       = $inputs['to'];
		$check    = Patient::count();

		if($check > 0){
			$reports = Patient::whereRaw('created_at < ? and created_at > ?', array($to, $from))->get();
			return   View::make('reports.reception', compact('reports'));
		}else{
			return  View::make('reports.reception_missing');
		}
	}

}	