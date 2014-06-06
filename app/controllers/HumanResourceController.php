<?php

class HumanResourceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $notice = Notification::all();
		return View::make('hr.hrdashboard', compact("notice"));
	}

	public function person()
	{
		return View::make('hr.register_person');
	}

    public function personStore()
    {
        $person = new Persons();
        $person->firstname = Input::get('firstname');
        $person->surname = Input::get('surname');
        $person->othername = Input::get('othernames');
        $person->nationality = Input::get('nationality');
        $person->residence = Input::get('residence');
        $person->place_of_domicile = Input::get('domicide');
        $person->date_of_birth = Input::get('date_of_birth');
        $person->gender = Input::get('gender');
        $person->marital_status = Input::get('marital_status');
        $person->number_of_dependence= Input::get('no_of_dependancy');
        $person->disability = Input::get('physical_disability');
        $person->photo = Input::get('file_source');
        $person->save();

        Session::flash('message', 'Successfully added!');
        return View::make('hr.person_other_information',  compact('person'));
    }


    public function personOtherInfo()
	{
		return View::make('hr.person_other_information');
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


    public function positionShow()
    {
       return View::make('hr.positionAdd');
    }


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $position = new Position();
        $position->name = Input::get('position_name');
        $position->facility = Input::get('facility');
        $position->proposed_hiring_date = Input::get('proposed_hiring_date');
        $position->status = Input::get('position_status');
        $position->proposed_salary = Input::get('proposed_salary');
        $position->save();

        Session::flash('message', 'Successfully added!');
        return View::make('hr.positionAdd');

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
	public function edit()
	{
		return View::make('hr.manage_person');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updateFirst($id)
	{
        $person1 = Persons::find($id);
        $person1->mobile_phone = Input::get('mobilephone');
        $person1->telephone = Input::get('telephone');
        $person1->email = Input::get('email');
        $person1->fax = Input::get('faxnumber');
        $person1->mailing_address = Input::get('mailing');
        $person1->offc_mobile_phone = Input::get('offcmobilephone');
        $person1->offc_telephone = Input::get('offctelephone');
        $person1->offc_email = Input::get('offcemail');
        $person1->offc_fax = Input::get('offcfaxnumber');
        $person1->offc_mailing_address = Input::get('offcmailing');

        $person1->save();
        // redirect
        Session::flash('message', 'Successfully updated!');
       return "ok";
    }

    public function updateSecond($id)
    {
        $person2 = Persons::find($id);
        $person2->next_kn_name = Input::get('name');
        $person2->relationship = Input::get('relatioship');
        $person2->next_kn_email = Input::get('email');
        $person2->next_kn_mailing = Input::get('mailing');
        $person2->next_kn_mob_no = Input::get('mobilephone');
        $person2->next_kn_tel_no = Input::get('telephone');
        $person2->next_kn_fax_no = Input::get('faxnumber');
        $person2->next_kn_notes = Input::get('faxnumber');
        $person2->save();
        // redirect
        Session::flash('message', 'Successfully updated!');
        return "ok";
    }


    public function updateThird($id)
    {
        $person3 = Persons::find($id);
        $person3->basic_edu = Input::get('basic_edu');
        $person3->profession = Input::get('profession');
        $person3->save();
        // redirect
        Session::flash('message', 'Successfully updated!');
        return "ok";
    }


    public function updateFourth($id)
    {
        $person4 = Persons::find($id);
        $person4->position_id = Input::get('position');
        $person4->date_first = Input::get('date_start');
        $person4->date_last = Input::get('date_end');
        $person4->employ_status = Input::get('employ_status');
        $person4->employ_type = Input::get('employ_type');
        $person4->save();
        // redirect
        Session::flash('message', 'Successfully updated!');
        return "ok";
    }

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
