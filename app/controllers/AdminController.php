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
class AdminController  extends BaseController{


    public function __construct(){
            $this->beforeFilter('auth', array('*'));
    }

    public function getIndex(){
            return View::make("admin.admini_page");
    }
    		public function manage_user(){
            return View::make("admin.manage_user");
    }


     public function editUser($id){
            $inputs = Input::all();
            $user   = User::find($id);
            $user->first_name = $inputs['fn']; 
            $user->last_name = $inputs['ln']; 
            $user->middle_name = $inputs['mn']; 
            $user->address = $inputs['a']; 
            $user->level =   $inputs['l']; 
            $user->contact = $inputs['c']; 
            $user->email = $inputs['e']; 
            $user->save();
            return "ok";
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