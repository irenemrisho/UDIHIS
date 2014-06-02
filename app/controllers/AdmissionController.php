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
class AdmissionController  extends BaseController{

    public function index(){
      
        return View::make('admission.nurse',compact('patient'));
    }

      public function patients(){

        /*$patient = Patient::find();*/
        return View::make('admission.patients',compact('patient'));
    }

     public function allocate_ward(){

        /*$patient = Patient::find();*/
        return View::make('admission.allocate_ward',compact('patient'));
    }


    public function manage_inp_info(){
      return View::make('admission.manage_inp',compact('patient'));  
        
    }

    public function edit($id){

    }
  }
    //put your code here