<?php

class HumanResourceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('hr.hrdashboard', compact("notice"));
	}

    public function manage_user()
    {
        $person= User::orderBy('id', 'DESC')->get();
        return View::make('hr.manage_user', compact('person'));
    }

	public function person()
	{
		return View::make('hr.register_person');
	}

  public function manage_employee($id)
  {
    $id = Crypt::decrypt($id);
    $person = User::find($id);

    return View::make('hr.person_info', compact('person'));
  }

  public function employee_more_info($id)
  {
    $person = User::find($id);
    return View::make('hr.person_more_information', compact('person'));
  }

  public function update_basic_info($id)
  {
    $person = User::find($id);
    return View::make('hr.update_basic_info', compact('person'));
  }

  public function update_personal_contact($id)
  {
    $person = User::find($id);
    return View::make('hr.update_personal_contact', compact('person'));
  }

  public function update_work_contact($id)
  {
    $person = User::find($id);
    return View::make('hr.update_work_contact', compact('person'));
  }

  public function add_next_of_kin($id)
  {
    $person = User::find($id);
    return View::make('hr.add_next_of_kin', compact('person'));
  }

  public function add_education($id)
  {
    $person = User::find($id);
    return View::make('hr.add_education', compact('person'));
  }

    public function hr_profile()
    {
     
        return View::make('hr.profile');

      }

    public function personStore()
    {

        $file = Input::file('img'); // your file upload input field in the form should be named 'file'
       $destinationPath = public_path().'/uploads';
       $filename = $file->getClientOriginalName();
       //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
       $uploadSuccess = Input::file('img')->move($destinationPath, $filename);
       $RandNumber          = rand(0, 9999999999);
       if( $uploadSuccess ) {
           require_once('PHPImageWorkshop/ImageWorkshop.php');
           chmod($destinationPath."/".$filename, 0777);
           $layer = PHPImageWorkshop\ImageWorkshop::initFromPath(public_path().'/uploads/'.$filename);
           unlink(public_path().'/uploads/'.$filename);
           $layer->resizeInPixel(400, null, true);
           $layer->applyFilter(IMG_FILTER_CONTRAST, -16, null, null, null, true);
           $layer->applyFilter(IMG_FILTER_BRIGHTNESS, 9, null, null, null, true);
           $dirPath =public_path().'/uploads/' ."hr";
           $filename = "_".$RandNumber.".png";
           $createFolders = true;
           $backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
           $imageQuality = 100; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
           $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);
           chmod($dirPath ."/".$filename , 0777);
       }





        $person = new User();
        $person->first_name = Input::get('firstname');
        $person->last_name = Input::get('surname');
        $person->middle_name = Input::get('othernames');
        $person->nationality = Input::get('nationality');
        $person->residence = Input::get('residence');
        $person->place_of_domicile = Input::get('domicide');
        $person->date_of_birth = Input::get('date_of_birth');
        $person->gender = Input::get('gender');
        $person->marital_status = Input::get('marital_status');
        $person->number_of_dependence= Input::get('no_of_dependancy');
        $person->disability = Input::get('physical_disability');
        $person->photo = $filename;
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
        $person = User::find($id);
        $person1 = User::find($id);
        $person1->phone_no = Input::get('mobilephone');
        $person1->telephone = Input::get('telephone');
        $person1->email = Input::get('email');
        $person1->mailing_address = Input::get('mailing');
        $person1->offc_mobile_phone = Input::get('offcmobilephone');
        $person1->extension_no = Input::get('offctelephone');
        $person1->offc_email = Input::get('offcemail');
        $person1->offc_fax = Input::get('offcfaxnumber');
        $person1->offc_mailing_address = Input::get('offcmailing');

        $person1->save();
        // redirect
        Session::flash('message', 'Successfully updated!');
        return View::make('hr.person_other_information', compact('person'));
    }

    public function updateSecond($id)
    {
        $person = User::find($id);
        $person2 = User::find($id);
        $person2->next_kn_name = Input::get('name');
        $person2->relationship = Input::get('Relatioship');
        $person2->next_kn_email = Input::get('email');
        $person2->next_kn_mailing = Input::get('mailing');
        $person2->next_kn_mob_no = Input::get('mobilephone');
        $person2->next_kn_tel_no = Input::get('telephone');
        $person2->next_kn_notes = Input::get('note');
        $person2->save();
        // redirect
        Session::flash('message', 'Successfully updated!');
        return View::make('hr.person_other_information', compact('person'));
    }

    public function updateRegistration($id)
    {
        $person = User::find($id);
        $person2 = User::find($id);
        $person2->reg_council = Input::get('benefit');
        $person2->reg_no = Input::get('reg_number');
        $person2->reg_date = Input::get('reg_date');
        $person2->lisence = Input::get('lic_number');
        $person2->exp_date = Input::get('exp_date');
        $person2->save();
        // redirect
        Session::flash('message', 'Successfully updated!');
        return View::make('hr.person_more_information', compact('person'));
    }


    public function updateThird($id)
    {
        $person = User::find($id);
        $person3 = User::find($id);
        $person3->institution = Input::get('institution');
        $person3->location = Input::get('institution');
        $person3->year_complete = Input::get('year_complete');
        $person3->profession = Input::get('profession');
        $person3->major = Input::get('major');
        $person3->save();
        // redirect
        Session::flash('message', 'Successfully updated!');
        return View::make('hr.person_other_information', compact('person'));
    }


    public function updateFourth($id)
    {
        $person = User::find($id);
        $person4 = User::find($id);
        $person4->level = Input::get('level');
        $person4->date_first_appointment = Input::get('date_start');
        $person4->employee_type = Input::get('employ_type');
        $person4->employment_status = Input::get('employ_status');
        $person4->salary = Input::get('salary');
        $person4->super_position = Input::get('superposition');
        $person4->payslip_no = Input::get('payslip');
        $person4->save();
        // redirect
        Session::flash('message', 'Successfully updated!');
        return View::make('hr.person_other_information', compact('person'));
    }

    public function discplinaryAction($id)
    {
        $person = User::find($id);
        $person5 = User::find($id);
        $person5->action_taken = Input::get('action');
        $person5->reason = Input::get('reason');
        $person5->action_start = Input::get('start_date');
        $person5->action_end = Input::get('end_date');
        $person5->date_of_discussion = Input::get('status');
        $person5->involved_people = Input::get('people');
        $person5->save();
        // redirect
        Session::flash('message', 'Successfully updated!');
        return View::make('hr.person_more_information', compact('person'));
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
