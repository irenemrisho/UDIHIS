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
        
        $chk = Patient::where('phone', $inputs['phone'])->count();
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
        $pat            = Patient::find($id);
        $pat->firstname = $inputs['firstname']; 
        $pat->lastname = $inputs['lastname']; 
        $pat->address = $inputs['address']; 
        $pat->birth = $inputs['birth'];
        $pat->phone = $inputs['phone'];
        $pat->gender = $inputs['gender'];
        $pat->fullname = $inputs['fullname']; 
        $pat->location = $inputs['location']; 
        $pat->workingplace = $inputs['workingplace']; 
        $pat->phone2 = $inputs['phone2']; 
        $pat->save();

        return View::make('reception.managepatients')->with('message', 'updated successfully');



    }
  }
    //put your code here