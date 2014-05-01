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
		$input = Input::get('consultation');
		dd($input);
		$consNotes = Patients_visit::find(1);
		$consNotes->save();
		return "ok";
	}

	public function lab_test($id){
		$patient = Patient::find($id);
		return View::make('doctor.lab_request_form',compact('patient'));
	}

    public function search(){
          $user = Input::get('p');

          $patients = Patient::where('firstname', 'LIKE', '%'.$user.'%')->get();



          $tbl = "<thead>
					<tr>
						<th>File Number</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Payment Status</th>
						
						<th>&nbsp;</th>
					</tr>
				</thead>
				
				<tbody>";

          foreach($patients as $u){
                $tbl .= "<tr>
                           
                          
                        </tr>";
          }      

            $tbl .= "</tbody>";
                                                        
            return $tbl;                                       

    }

	public function recommend(){
		$inputs      = Input::all();
		//$medicine_id = Medicine::where('name', $inputs['prescribedmedicine'])->first()->id;
		$recommend   = Recommended_medicine::create(array(
				"medicine_id"=>1,
				"pv_id"=>1,
				"status"=>"open",
				"quantity"=>$inputs['quantity'],
				"description"=>$inputs['notes']
		));
		return "ok";
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