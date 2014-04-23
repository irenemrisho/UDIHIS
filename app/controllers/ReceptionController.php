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
    		public function manage_patients(){
            return View::make("admin.manage_user");
    }


    public function loadsection(){
    	$section = Input::get('sect');
    	return View::make('reception.section',compact('section'));
    }

    public function savepatientinfo(){

    	$inputs     = Input::all();
        $filenumber = array('filenumber' => Patient::fileno());
        $inputs     = array_merge($inputs, $filenumber);
    	$newpatient = Patient::create($inputs);
        //return      Redirect::to('reception');
        //return  
        return View::make("reception.manage_patients", compact('newpatient'));

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
  }
    //put your code here