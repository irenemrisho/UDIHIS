<?php

class ReportsController extends \BaseController {

	public function generateReports(){
		$inputs   = Input::all();
		$from     = $inputs['from'];
		$to       = $inputs['to'];


		$reports = Patient::whereRaw('created_at <= ? and created_at > ?', array($to, $from))->get();

		if($inputs['reporttype'] == "Table"){
			return   View::make('reports.reception', compact('reports'));
		}else{
	
			$days        = Report::generateDays($from, $to);
	
			$students       = array();
			$staff          = array();
			$family         = array();
			$private        = array();

			foreach ($days as $day) {
				$students[] = Patient::whereRaw('created_at = ? and designation = ?', array($day, 'Student'))->count();
				$staff[]    = Patient::whereRaw('created_at = ? and designation = ?', array($day, 'Staff'))->count();
				$family[]   = Patient::whereRaw('created_at = ? and designation = ?', array($day, 'FamilyMember'))->count();
				$private[]  = Patient::whereRaw('created_at = ? and designation = ?', array($day, 'Private'))->count();
			}
			//setup goes down
			$chart          = strtolower($inputs['reporttype']);
			$title          = "Patients Registration Report from " . $from . " to " . $to;
			$subtitle		= "all cases 1A Form";


			$dataArr = array(
							"title"             => $title,
							"subtitle"          => $subtitle,
							"yAxisDataStudent"  => $students,
							"yAxisDataStaff"    => $staff,
							"yAxisDataFamily"   => $family,
							"yAxisDataPrivate"  => $private,
							"xAxisData"			=> $days,	
							"chartType"         => $chart
							);
			return json_encode($dataArr);
		}
		
		
	}

}	