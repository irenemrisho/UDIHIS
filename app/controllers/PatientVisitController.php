<?php

class PatientVisitController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$user = User::find($id);
		$patient  = Patient::find($id);
		return View::make('laboratory.appoint',compact('patient' , 'user'));
	}

	public function visit($id)
	{			
				$patient  = Patient::find($id);
		   		$pVisit = Patients_visit::where('patient_id',$id)->first();
                return View::make("reception.newVisit", compact('pVisit', 'patient'));
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
            "paymenttype"=>$payment,
            "dt"=>date('Y-m-d')
          ));
      $patient_id = $pid;

      $private_id=InsuranceCompany::whereName('private')->first()->id;

      $registration_id= Service::whereName('registration')->first()->id;
      $consultation_id= Service::whereName('consultation')->first()->id;

      $registration_price_id = Price_company::whereRaw('service_id=? and company_id = ? ', array($registration_id,$private_id))->first()->id;
      $consultation_price_id = Price_company::whereRaw('service_id=? and company_id = ? ', array($consultation_id,$private_id))->first()->id;
 
                    if($payReg == 1){
                            $this->addPayment($registration_price_id,$patient_id,'now');
                        }
                        else{
                            $this->addPayment($registration_price_id,$patient_id,'later');
                        }
                        if($payCons == 1){
                             $this->addPayment($consultation_price_id,$patient_id,'now');
                        }else{
                            $this->addPayment($consultation_price_id,$patient_id,'later');
                        }

        
     }


    public function addPayment($price_company_id,$patient_id,$time) {
        //$cash is boolean value true for cash , false for insured
        if($time=='now'){
            $status="paid";
        }else{
            $status="unpaid";
        }

        //$service_id = Service::where('name',$service_name)->first()->id;



        $payment = Payment::create(array(
            "price_company_id"=>$price_company_id,
            "patient_id"=>$patient_id,
            "status"=>$status,
            "dt"=>date('Y-m-d')
        ));

    }



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

    public function update($id)
    {
        $inputs = Input::all();
        $appointment   = Appointment::find($id);
        $appointment->first_name = $inputs['first_name'];
        $appointment->last_name = $inputs['last_name'];
        $appointment->date = $inputs['date'];
        $appointment->phone_number = $inputs['phone_number'];
        $appointment->time = $inputs['time'];

        $appointment->save();
        return View::make('reception.appointment');
    }


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
    {
        $appointment = Appointment::find($id);
        return View::make('reception.editappointment', compact('appointment'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function appoint(){
		return View::make('reception.appointment');
	}

	public function setAppointment()
	{
        $appoint = new Appointment;
        $appoint->doctor_id = Input::get('specialist');
        $appoint->date = Input::get('date');
        $appoint->time = Input::get('time');
        $appoint->first_name = Input::get('first_name');
        $appoint->last_name = Input::get('last_name');
        $appoint->phone_number = Input::get('phone_number');
        $appoint->save();

        return View::make('reception.appointment');

	}
		/*public function appoint()

	{
	return View::make("reception.appointmentRegister");
	}*/


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$appointment = Appointment::find($id);
          $appointment->delete();
        return View::make('reception.appointment');

;	}


}
