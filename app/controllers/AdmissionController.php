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

        $patient = Patient::all();
         $pv = Patients_visit::all();
        return View::make('admission.patients',compact('patient' , 'pv'));
    }

     public function allocate_ward($id){

        $patient = Patient::find($id);
        $pv = Patients_visit::find($id);
        return View::make('admission.allocate_ward',compact('patient'));
    }


    public function manage_patient($id){
      $patient = Patient::find($id);
      return View::make('admission.manage_patient',compact('patient'));  
        
    }
     public function allocate(){
      
    return "Please Specify the patient ID to allocate!!" ; 
        
    }

    public function edit($id){

    }
  }
    //put your code here