<?php 
class BillingController  extends BaseController{
    
    public function getIndex(){
            return View::make("billing.billing");
            
}
    public function getEditService(){
            return View::make("billing.edit_service");
            
}

    public function getBills(){

        if(isset($_GET['pay'])){
             $update = Payment::find($_GET['pay']);
             $update->status='paid';
             $update->save();            
        }

	       $payments = Payment::groupBy('patient_id')
         ->where('status','=','unpaid')->get(array('patient_id', DB::raw('count(*) as count')));

        return  View::make('billing.Pending_bills')->with('payments',$payments);

    }
    
    public function getInsurance(){
            return View::make("billing.Insurance_management");
    }
    

    public function getService(){
     
  	if(isset($_GET['edit'])){
			$inputs = Input::all();
			$service = Service::where('id',$_GET['edit'])
                                ->update(array(
				"name"=>$inputs['name'],
				"price"=>$inputs['Price']

				));
			if ($service) {
                            
			   return Redirect::to('service_management?msg=3');
                        }else{
                            
                            return Redirect::to('service_management?msg=4');
                        }
            
        }  
	
	if(isset($_GET['dlt'])){
            Service::destroy($_GET['dlt']);
            return Redirect::to('service_management?msg=5');
        } 
	
       $services = Service::get();
       return  View::make('billing.service_management')->with('services',$services);

    }
    
    public function addService(){
                
                 
               	$inputs = Input::all();
			$service = Service::create(array(
				"name"=>$inputs['service_name'],
				"price"=>$inputs['service_price']
				

				));
			if ($service) {
                            
			   return Redirect::to('service_management?msg=1');
                        }else{
                           
                            return Redirect::to('service_management?msg=2');
                        }
  	
          }  
    public function getReports(){
            return View::make("billing.reports_billing");
    }
    
    public function getProfile(){
            return View::make("billing.profile_billing");
    }

    public function profile(){
        
        $id = Input::get('id');
        $patients_payments = Payment::whereRaw('status=? and patient_id = ? ', array('unpaid',$id))->get();
        

        return View::make('billing.showPayements')->with('patients_payments',$patients_payments);
    }   
  
    public function provide_payments(){

            
            if(isset($_POST['add'])){

            $name = $_POST['add'];
            foreach ($name as $Payment) {

             $Payment_id = mysql_real_escape_string(stripslashes($Payment));

             $update = Payment::find($Payment_id);
             $update->status='paid';
             $update->save();

                    }
           
            return Redirect::to('Pending_bills?msg=1');
                }else{
             
            return Redirect::to('Pending_bills?msg=2');     
                }
            

        
       
   
    }



 }
 
 