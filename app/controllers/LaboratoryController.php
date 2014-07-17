<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author Owden
 */
class LaboratoryController  extends BaseController{
     public function __construct(){
            $this->beforeFilter('auth', array('*'));
    }

    public function laboratory(){
            return View::make('laboratory.laboratory');
    }
    public function stock(){
    	return View::make('laboratory.stock');
    }

    public function testpatients(){
        return View::make('laboratory.testpatients');
    }
    public function testpatient($id){
        return View::make('laboratory.testpatient')->with('lab_id', $id);
    }
    public function getTests(){
        return Laboratory::whereRaw('tested = FALSE')->count();
    }
    public function lab_results(){
        
    }

   
  }
    //put your code here