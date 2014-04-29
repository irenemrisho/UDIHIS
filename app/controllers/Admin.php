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
class Admin  extends BaseController{


	 public function __construct(){
            $this->beforeFilter('auth', array('*'));
    }
            public function getIndex(){
            return View::make("admin.admini_page");
    }


    		public function manage_user(){
            return View::make("admin.manage_user");
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
				"username" =>$inputs['username'],
				"room_no"=>$inputs['room_no'],
				"extension_no" =>$inputs['extension_no'],
				"phone_no" =>$inputs['phone_no'],


				));
			if ($usr) {
				return Redirect::to('manage_user');
			}
  	}
  }
    //put your code here