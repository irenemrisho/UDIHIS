<?php

class ReportsController extends \BaseController {

	public function printReport(){
		$f     = $_GET['from'];
		$t     = $_GET['to'];
		$reports = Patient::whereRaw('dt <= ? and dt > ?', array($t, $f))->get();
		$pdf     = PDF::loadView('reports.receptionx', compact('reports'));
		return $pdf->stream();
	}

	public function generateReports(){
		$inputs   = Input::all();
		$from     = $inputs['from'];
		$to       = $inputs['to'];


		$reports = Patient::whereRaw('dt <= ? and dt > ?', array($to, $from))->get();

		if($inputs['reporttype'] == "Table"){
			return   View::make('reports.reception', compact('reports'))->with('f',$from)->with('t',$to);
		}else{
	
			$days        = Report::generateDays($from, $to);
	
			$students       = array();
			$staff          = array();
			$family         = array();
			$private        = array();

			foreach ($days as $day) {
				$students[] = Patient::whereRaw('dt = ? and designation = ?', array($day, 'Student'))->count();
				$staff[]    = Patient::whereRaw('dt = ? and designation = ?', array($day, 'Staff'))->count();
				$family[]   = Patient::whereRaw('dt = ? and designation = ?', array($day, 'FamilyMember'))->count();
				$private[]  = Patient::whereRaw('dt = ? and designation = ?', array($day, 'Private'))->count();
			}

			$student_per    = Patient::whereRaw('dt <= ? and dt > ? and designation = ?', array($to, $from, 'Student'))->count();
			$staff_per      = Patient::whereRaw('dt <= ? and dt > ? and designation = ?', array($to, $from, 'Staff'))->count();
			$family_per     = Patient::whereRaw('dt <= ? and dt > ? and designation = ?', array($to, $from, 'FamilyMember'))->count();
			$private_per    = Patient::whereRaw('dt <= ? and dt > ? and designation = ?', array($to, $from, 'Private'))->count();
			
			$total_per      = ($student_per + $staff_per + $family_per + $private_per);

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
							"chartType"         => $chart,
							"student_per"       => ($total_per == 0) ? 0 : (($student_per/$total_per)*100),
							"staff_per"         => ($total_per == 0) ? 0 : (($staff_per/$total_per)*100),
							"family_per"        => ($total_per == 0) ? 0 : (($family_per/$total_per)*100),
							"private_per"       => ($total_per == 0) ? 0 : (($private_per/$total_per)*100),
							);
			return json_encode($dataArr);
		}
		
		
	}

}	