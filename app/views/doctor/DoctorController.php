<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PharmacyController
 *
 * @author Owden
 */
class DoctorController extends BaseController {
	 public function __construct(){
            $this->beforeFilter('auth', array('*'));
    }
	
	public function index(){
		return View::make('doctor.doctor');


	}

	public function getReport(){

		//setup goes down
		$today         = date('Y-m-d');
		$days          = Patients_visit::getDays($today);
		$xAxisData     = array();
		foreach ($days as $day) {
			$xAxisData[] = date('D',strtotime($day));
		}
		$yAxisDataMale   = Patients_visit::getPatientsVisits("Male", $today);
		$yAxisDataFemale = Patients_visit::getPatientsVisits("Female", $today);

		$dataArr = array(
						"xAxisData"       => $xAxisData,
						"yAxisDataMale"   => $yAxisDataMale,
						"yAxisDataFemale" => $yAxisDataFemale
						);
		return json_encode($dataArr);
	}


	public function getAppoints(){
		$n = Appointment::whereRaw('doctor_id = ? and accepted = ?', array(Auth::user()->id, "no"))->count();
		if($n == 0){
			return "no";
		}else{
			return $n;
		}
	}

	public function accept($id){

		$appointment = Appointment::find($id);
		$appointment->accepted = "yes";
		$appointment->save();
		return 3;
	}

	public function attend(){
		$id    = Input::get('pid');
		$patient = Patient::find($id);
		return View::make('doctor.attend',compact('patient'));
	}
	public function admit($id){
		$patient = Patient::find($id);
		return View::make('doctor.admit', compact('patient'));
	}
	public function admit_post($id){
		$patient   = Patients_visit::where('patient_id',$id)->first();
		$patient   ->admission_date = Input::get('admit_date');;
		$patient   ->admit_notes = Input::get('notes');
		$patient   ->save();

		return Redirect::back()->with('msg','Patient admitted!');
	}

	public function getMedxn(){
		$medicines = Medicine::all();

		$mdx       = array();
		foreach ($medicines as $m) {
			# code...
			$mdx[] = $m->name;
		}

		return json_encode($mdx);
	}

	public function autosave(){
		$input = Input::get('cN');
		$pid   = Input::get('pid');
		$patient = Patients_visit::where('patient_id', $pid)->first();
		$patient->consultation=$input;
		$patient->save();
		return "ok";
	}

	public function lab_test_post($id){
		$inputs = Input::get('tex');

		$tests  = implode($inputs, ",");

		

		 $pv_id  = Patients_visit::where('patient_id',$id)->first()->id;
		 $test   = Laboratory::create(array(
		 			"pv_id"=>$pv_id,
					"test_type"=>$tests
		 	));

		 $pv     = Patients_visit::where('patient_id',$id)->first();
		 $pv->labteststatus = "Yes";
		 $pv->save();

		return url('patients');

	}

	public function lab_test($id){
		$patient = Patient::find($id);
		return View::make('doctor.lab_request_form',compact('patient'))->with('pid', $id);
	}

    public function search(){
          $user = Input::get('p');

          if($user == ""){
          		$patients = Patient::orderBy('filenumber','DESC')->take(5)->get();
          		return View::make('doctor.search_patient',compact('patients')); 
          }else{
          	$patients = Patient::where('firstname', 'LIKE', '%'.$user.'%')->count();
          	if($patients == 0){
          		return View::make('doctor.search_patient');
          	}else{
          		$patients = Patient::where('firstname', 'LIKE', '%'.$user.'%')->get();
          		return View::make('doctor.search_patient', compact('patients')); 
          	}
			 
          }
    }

	public function recommend(){
		$inputs      = Input::all();
		$medicine_id = Medicine::where('name', $inputs['prescribedmedicine'])->first()->id;
		$recommend   = Recommended_medicine::create(array(
				"medicine_id"=>$medicine_id,
				"pv_id"=>1,
				"status"=>"open",
				"quantity"=>$inputs['quantity'],
				"description"=>$inputs['notes']
		));
		return Redirect::back()->with('msg',$inputs['prescribedmedicine']. ' was prescribed successfully');
	}

	public function prescribe($id){
		$patient = Patient::find($id);
		return View::make('doctor.prescription', compact('patient'));
	}

	public function appointment(){
		return View::make('doctor.appointment');

	}

	public function patients(){
		return View::make('doctor.patients');

	}

	public function prescription(){
		
		return View::make('doctor.prescribe');

	}

	public function doc_profile(){
		
		return View::make('doctor.profile');

	}
	public function profile(){
		$pid = Input::get('pid');
		$patient = Patient::find($pid);
		return View::make('doctor.showPatient',compact('patient'));

	}			

	public function reports(){
		return View::make('doctor.reports');

	}
}