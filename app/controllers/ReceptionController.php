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

    public function manage_patients(){
            return View::make("admin.manage_user");
    }


    public function loadsection(){
    	$section = Input::get('sect');
    	return View::make('reception.section',compact('section'));
    }

    public function patientinfo(){
        $inputs     = Input::all();
        return $inputs;
    }

    public function savepatientinfo(){

        $inputs     = Input::all();
        

        $chk = Patient::where('phone_no', $inputs['phone_no'])->count();
        if($chk == 0){
                $filenumber = array('filenumber' => Patient::fileno());
                $inputs     = array_merge($inputs, $filenumber);
                $newpatient = Patient::create($inputs);
                return View::make("reception.manage_patients", compact('newpatient'))->with('message', 'Patient successfully registered!');
        }else{
                return View::make('reception.registerpatient')->with('error', 'Patient exists!')->with('input', Input::all());
                //return Redirect::back()->withInput($inputs);
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
        $patient = Patient::find($id);
        return View::make('reception.editpatient', compact('patient'));
    }

    public function edit($id){
        $inputs         = Input::all();
        $patient            = Patient::find($id);
        $patient->firstname = Input::get('first_name');
        $patient->lastname = Input::get('last_name');
        $patient->email = Input::get('email');
        $patient->birth= Input::get('birth_date');
        $patient->phone_no = Input::get('mobile_no');
        $patient->telephone_no      = Input::get('telephone_no');
        $patient->street      = Input::get('street');
        $patient->house_no      = Input::get('house_no');
        $patient->district      = Input::get('district');
        $patient->tribe      = Input::get('tribe');
        $patient->religion      = Input::get('religion');
        $patient->save();


        return View::make('reception.managepatients')->with('message', 'updated successfully');



    }
  }
    //put your code here