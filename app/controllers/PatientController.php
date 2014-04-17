<?php

class PatientController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function profile(){
		$id = Input::get('id');
		$patient  = Patient::find($id);
		return View::make('doctor.showPatient', compact('patient'));
	}
	public static $restfull = true;
	protected $layout = 'reception.reception';

	public function index()
	{
		// get all users

		

		// load the view with users

		if(Auth::user()->level == 4){
			$fullname = Auth::user()->first_name . " " . Auth::user()->last_name;
			$patients = Patient::where('sectioninfo', $fullname )->get();
			return View::make('doctor.patients', compact('patients'));
		}else{
			$patients = Patient::all();
			$this->layout->content = View::make('reception.manage_patients')
			->with ( 'patients' , $patients );
		}

		
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('reception.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		 $patient = new Patient;
            $patient->first_name = Input::get('first_name');
            $patient->middle_name = Input::get('middle_name');
            $patient->last_name = Input::get('last_name');
            $patient->address = Input::get('address');
            $patient->birth_date = Input::get('birth_date');
            $patient->contact = Input::get('contact');
            $patient->gender      = Input::get('gender');
            $patient->save();

            // redirect
            Session::flash('message', 'Successfully added a Patient!');
            return Redirect::to('patients');
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
		$patient = Patient::find($id);
	  return View::make('reception.edit' , compact('patient'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$patient = Patient::find($id);
		 $patient->first_name = Input::get('first_name');
            $patient->middle_name = Input::get('middle_name');
            $patient->last_name = Input::get('last_name');
            $patient->address = Input::get('address');
            $patient->birth_date = Input::get('birth_date');
            $patient->contact = Input::get('contact');
            $patient->gender      = Input::get('gender');
            $patient->save();
            // redirect
            Session::flash('message', 'Successfully updated!');
            return Redirect::to('patients');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		  // delete
        $patient = Patient::find($id);
        $patient->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the Patient!');
        return Redirect::to('patients');
	}

}