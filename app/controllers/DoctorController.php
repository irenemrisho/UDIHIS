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

	public function index(){
		return View::make('doctor.doctor');

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

		// $pv_id  = Patients_visit::where('patient_id',$id)->first()->id;
		// $test   = Laboratory::create(array(
		// 			"pv_id"=>$pv_id,
		// 			"test_type"=>$tests
		// 	));

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
		return View::make('doctor.prescription');

	}

	public function profile(){
		return View::make('doctor.profile');

	}		

	public function reports(){
		return View::make('doctor.reports');

	}
}