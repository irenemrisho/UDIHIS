<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author irene
 */
class ReceptionController  extends BaseController{
    
    public function getIndex(){
            return View::make("reception.reception");
    }

    public function index(){
            return View::make('reception.managepatients');
    }

    public function reports(){
        return View::make('reception.reports');
    }

    public function getreports(){
        $inputs        = Input::all();
        $gender        = $inputs['gender'];
        $age           = $inputs['age'];
        $district      = $inputs['district'];
        $reporttype    = $inputs['reporttype'];
        $report        = $inputs['report'];
        $date          = $inputs['date'];

        $patients      = Patient::all();

        return View::make('reports.patients', compact('patients'));
    }


    public function manage_patients(){
            return View::make("admin.manage_user");
    }


    public function loadsection(){
    	$section = Input::get('sect');
    	return View::make('reception.section',compact('section'));
    }

    public function patientinfo(){
        $inputs     = Input::except('payReg','payCons');
        $payReg =Input::get('payReg');
        $payCons =Input::get('payCons');

        $pid = $inputs['pid'];
        $height = $inputs['height'];
        $weight = $inputs['weight'];
        $allergy = $inputs['allergy'];
        $temperature = $inputs['temperature'];
        $bloodpressure = $inputs['bloodpressure'];
        $bloodgroup = $inputs['bloodgroup'];
       // $rhesus = $inputs['rhesus'];
        $payment = $inputs['payment'];
        $section = $inputs['section'];

      $pvInfo = Patients_visit::create(array(

            'height' => $height,
            "weight" => $weight,
            "temperature" => $temperature,
            "bloodgroup"=>$bloodgroup,
            "bloodpressure" => $bloodpressure,
            "paymenttype" => $payment,
            "allergy" => $allergy,
            "patient_id"=>$pid,
            "paymenttype"=>$payment
          ));
      $patient_id = $pid;

                    if($payReg == 1){
                            $this->addPayment(1,$patient_id,'now');
                        }
                        else{
                            $this->addPayment(1,$patient_id,'later');
                        }
                        if($payCons == 1){
                             $this->addPayment(2,$patient_id,'now');
                        }else{
                            $this->addPayment(2,$patient_id,'later');
                        }

        
     }


    public function addPayment($service_id,$patient_id,$time) {
        //$cash is boolean value true for cash , false for insured
        if($time=='now'){
            $status="paid";
        }else{
            $status="unpaid";
        }

        //$service_id = Service::where('name',$service_name)->first()->id;



        $payment = Payment::create(array(
            "service_id"=>$service_id,
            "patient_id"=>$patient_id,
            "status"=>$status
        ));

    }

    public function savepatientinfo(){
        
        $inputs     = Input::all();
        
        $rules = array(
        'phone_no' => 'Min:10|Max:13|Alpha_num',
        
            );

            $v = Validator::make($inputs, $rules);
            if( $v->passes() ) {
                    # code for validation success!
                $chk = Patient::where('phone_no', $inputs['phone_no'])->count();
            if($chk == 0){
                    $filenumber = array('filenumber' => Patient::fileno());
                    $inputs     = array_merge($inputs, $filenumber);
                    $newpatient = Patient::create($inputs);
                    
                return View::make("reception.manage_patients", compact('newpatient'))->with('message', 'Patient successfully registered!');
        }
        else
        {
                return View::make('reception.registerpatient')->with('error', 'Patient exists!')->with('input', Input::all());
                //return Redirect::back()->withInput($inputs);
        }
            } else {
            return View::make('reception.registerpatient')->with('error', 'Please, write a correct mobile number!')->with('input', Input::all());
                    # code for validation failure
            }
                    
        
    }

	public function addUser(){
			$inputs = Input::all();
			$usr = User::create(array(
				"email"=>$inputs['email'],
				"first_name"=>$inputs['first_name'],
				"last_name"=>$inputs['last_name'],
				"middle_name"=>$inputs['middle_name'],
				"level"=>$inputs['level'],
				"password"=>Hash::make($inputs['password']),
				"address" =>$inputs['address'],
				"contact"=>$inputs['contact']

				));
			if ($usr) {
				return Redirect::to('manage_user');
			}
  	}

    public function update($id){
        $pt = Patients_visit::where('patient_id',$id)->first();
        $patient = Patient::find($id);
        return View::make('reception.editpatient', compact('patient','pt' ));
    }

    public function edit($id){
        $inputs         = Input::all();
        $patient            = Patient::find($id);
        $patient->firstname = Input::get('first_name');
        $patient->lastname = Input::get('last_name');
        $patient->email = Input::get('email');
        $patient->birth= Input::get('birth_date');
        $patient->phone_no = Input::get('phone_no');
        $patient->telephone_no      = Input::get('telephone_no');
        $patient->street      = Input::get('street');
        $patient->house_no      = Input::get('house_no');
        $patient->district      = Input::get('district');
        $patient->tribe      = Input::get('tribe');
        $patient->religion      = Input::get('religion');
        $patient->designation  = Input::get('designation');
        $patient->marital_status  = Input::get('marital_status');
        $patient->nationality  = Input::get('nationality');
        $patient->save();

        return View::make('reception.managepatients')->with('message', 'updated successfully');

    }
        public function editInitial($id){
        $inputs         = Input::all();
        $patient= Patients_visit::where('patient_id',$id)->first();
       
        $patient->height = Input::get('height');
        $patient->weight = Input::get('weight');
        $patient->bloodgroup = Input::get('blood_group');
        $patient->bloodpressure = Input::get('blood_presure');
        $patient->save();

        return View::make('reception.managepatients')->with('message', 'updated successfully');

    }
    public function printView($id){

    $newpatient = Patient::find($id);
    return View::make('reception.viewPrint' , compact('newpatient'));
   
    }

  }
    //put your code here