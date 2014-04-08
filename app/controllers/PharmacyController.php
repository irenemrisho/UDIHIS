<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PharmacyController
 *
 * @author irene
 */
class PharmacyController extends BaseController {

    public function getIndex(){
        
        return View::make('Pharmacy.pharmacy_page');
        
    }
    public function getMedics(){
        if(isset($_GET['provide'])){
             $update = Recommended_medicine::find($_GET['provide']);
             $update->status='closed';
             $update->save();
            
        }
        $provided_medicines = Recommended_medicine::where('status','=','open')->get();
       return  View::make('Pharmacy.provide_medication')->with('provided_medicines',$provided_medicines);
    }
    public function getMedic(){
        
        if(isset($_GET['dlt'])){
            Medicine::destroy($_GET['dlt']);
            
        }
        
        $medicines=Medicine::all();
        
        return View::make('Pharmacy.manage_medicine')->with('medicines',$medicines);
        
    }
    public function getCategory(){
        return View::make('Pharmacy.manage_category');
        
    }
    public function getReport(){
        return View::make('Pharmacy.manage_report');
        
    }
    public function getAccount(){
        return View::make('Pharmacy.my_accountpharmacy');
        
    }
    public function addMedicine(){
                
                 
               	$inputs = Input::all();
			$medicine = Medicine::create(array(
				"name"=>$inputs['Medicine_name'],
				"batch_no"=>$inputs['Butch_number'],
				"strength"=>$inputs['Strength'],
				"price"=>$inputs['Price'],
				"man_date"=>$inputs['Manufactured_date'],
				"exp_date"=>$inputs['Expire_date'],
				"quantity" =>$inputs['Quantity']

				));
			if ($medicine) {
                            
			   return Redirect::to('manage_medicine?msg=1');
                        }else{
                            
                            return Redirect::to('manage_medicine?msg=2');
                        }
  	
          }
    
		
    public function getEditMedicine(){
        
        return View::make('Pharmacy.edit_medicine');
        
    }
        
       public function updateMedicine(){
			$inputs = Input::all();
			$medicine = Medicine::where('id',$_GET['edit'])
                                ->update(array(
				"name"=>$inputs['Medicine_name'],
				"batch_no"=>$inputs['Butch_number'],
				"strength"=>$inputs['Strength'],
				"price"=>$inputs['Price'],
				"man_date"=>$inputs['Manufactured_date'],
				"exp_date"=>$inputs['Expire_date'],
				"quantity" =>$inputs['Quantity']

				));
			if ($medicine) {
                            
			   return Redirect::to('manage_medicine?msg=3');
                        }else{
                            
                            return Redirect::to('manage_medicine?msg=4');
                        }
                     
  	}
        
        
        
   
}
