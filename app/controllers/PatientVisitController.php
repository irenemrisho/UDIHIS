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
        $allergy = $inputs['allergy'];
        $temperature = $inputs['temperature'];
        $bloodpressure = $inputs['bloodpressure'];
        $bloodgroup = $inputs['bloodgroup'];
       // $rhesus = $inputs['rhesus'];
        $paymenttype = $inputs['paymenttype'];
        $section = $inputs['section'];

      $pvInfo = Patients_visit::create(array(

            'height' => $height,
            "weight" => $weight,
            "temperature" => $temperature,
            "bloodgroup"=>$bloodgroup,
            "bloodpressure" => $bloodpressure,
            "patient_id"=>$pid,
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
		//
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

	public function setAppointment($id)
	{
		$inputs = Input::all();
		$pid = $inputs['pid'];
		$user = $inputs['sectioninfo'];
		$date = $inputs['appointment'];
		$time = $inputs['time'];
		//$room_number = $inputs['room_no'];
       
        $paymenttype = $inputs['paymenttype'];
        $section = $inputs['section'];

      $pvInfo = Appointment::create(array(

            "doctor_id" => $user,
            //"time" => $time,
            
            "date" => $date,
            "patient_id"=>$pid
          ));
        $this->addPayment("registration",$pid,$paymenttype);

        return Redirect::to('manage/patients');

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
		//
	}


}
