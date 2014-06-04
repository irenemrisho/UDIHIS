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
        $inputs     = Input::all();
        $pid = $inputs['pid'];
        $height = $inputs['height'];
        $weight = $inputs['weight'];
        /*$allergy = $inputs['allergy'];*/
        $temperature = $inputs['temperature'];
        $bloodpressure = $inputs['bloodpressure'];
        /*$bloodgroup = $inputs['bloodgroup'];*/
        /*$rhesus = $inputs['rhesus'];*/
        $paymenttype = $inputs['payment'];
        $section = $inputs['section'];

      $pvInfo = Patients_visit::create(array(

            'height' => $height,
            'weight' => $weight,
            'temperature' => $temperature,
            /*'bloodgroup'=>$bloodgroup,*/
            'bloodpressure' => $bloodpressure,
            'paymenttype' =>$paymenttype,

            /*'rhesus' =>$rhesus,*/
            'patient_id' =>$pid,
          ));
        $this->addPayment("registration",$pid,$paymenttype);

        return url('manage/patients');

     }


    public function addPayment($service_name,$patient_id,$pay_type) {
        //$cash is boolean value true for cash , false for insured
        if($pay_type=='Cash'){
            $status="unpaid";
        }else{
            $status="paid";
        }

        $service_id = Service::where('name',$service_name)->first()->id;

        $payment = Payment::create(array(
            "service_id"=>$service_id,
            "patient_id"=>$patient_id,
            "status"=>$status
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
