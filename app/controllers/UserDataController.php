<?php

class UserDataController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function update_personal_basic($id)
	{
        $personBasic = User::find($id);
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

        $person = new UserData();
        $person->user_id = Input::get('uid');
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
	 * upadate
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update_personal_contact($id)
    {
       $person = User::find($id);
        $person1 = new UserData();
        $person1->user_id = Input::get('uid');
        $person1->phone_no = Input::get('mobilephone');
        $person1->telephone = Input::get('telephone');
        $person1->email = Input::get('email');
        $person1->mailing_address = Input::get('mailing');
//
//        $person1->offc_mobile_phone = Input::get('offcmobilephone');
//        $person1->offc_telephone = Input::get('offctelephone');
//        $person1->offc_email = Input::get('offcemail');
//        $person1->offc_mailing_address = Input::get('offcmailing');

        $person1->save();
        return "ok";

    }


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
