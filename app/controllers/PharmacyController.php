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

    public function __construct(){
            $this->beforeFilter('auth', array('*'));
    }

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
 public function getDash(){
        return View::make('Pharmacy.dashboard');

        
    }
    public function addMedicine(){
                
                 
               	$inputs = Input::all();
			$medicine = Medicine::create(array(
				"name"=>$inputs['Medicine_name'],
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
       
public function search(){
          $medicine = Input::get('u');

          $medicines = Medicine::where('name', 'LIKE', '%'.$medicine.'%')->get();



          $res = "<thead>
                    <tr>
                    <th>#</th>
                    <th>Medicine name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Expire date</th>
                    <th>Options</th>
                    </tr>
                </thead>
                <tbody>";

	
	  $index=1; 

          foreach($medicines as $m){
                $res .= "<tr>
                            <td>".$index."</td>
                            <td>".$m->name."</td>
                            <td>".$m->price."</td>
                            <td>".$m->quantity."</td>
                            <td>".$m->created_at."</td>
                            <td class='action-td'>
                                                                                                                                    
                            <a href='edit_medicine?edit={$m->id}'><span class='icon-edit btn btn-small btn btn-primary'></span></a>
				&nbsp;
                            <a href='manage_medicine?dlt={$m->id}' onclick=\"return confirm('Are you sure you want to delete');\">
			      <span class='icon-trash btn btn-small btn-danger'></span>
			   </a>
                            </td>
                       </tr>";
		$index++;
          }      

            $res .= "</tbody>";
                                                        
            return $res;                                       

    }
       public function updateMedicine(){
			$inputs = Input::all();
			$medicine = Medicine::where('id',$_GET['edit'])
                                ->update(array(
				"name"=>$inputs['Medicine_name'],
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
