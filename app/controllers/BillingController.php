<?php 
class BillingController  extends BaseController{
    
    public function getIndex(){
            return View::make("billing.billing");
            
}
    public function getEditService(){

        $Price_companies = Price_company::where('service_id',$_GET['edit'])->get(); 

        return View::make("billing.edit_service")->with('Price_companies',$Price_companies);
            
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

             $campanies = InsuranceCompany::orderBy('name')->get();

            return View::make("billing.Insurance_management")->with('campanies',$campanies);
    }

    public function addInsurance(){

        $campany = new InsuranceCompany;

            $campany->name = Input::get('campany_name');
            $campany->contact_name = Input::get('contact_person');
            $campany->pobox = Input::get('P_O_BOX');
            $campany->city = Input::get('City');
            $campany->contact_email = Input::get('email');
            $campany->payement_type= Input::get('payment_type');
            $campany->from = Input::get('contract_from');
            $campany->to = Input::get('contract_to');
            
            $campany->save();


            if ($campany) {
                $campany_id = $campany->id;      

               return Redirect::to('add_campany_price?msg=1&cmp='.$campany_id);

                        }else{
                            
                            return Redirect::to('Insurance_management?msg=2');
                        }
    
    }
    
     public function getEditCampany()
    {
        # code...
        return View::make("billing.edit_insurance_campany");
    }

    public function UpdateCampany()
    {

        $inputs = Input::all();   
        $service = InsuranceCompany::where('id',$_GET['edit'])
                                ->update(array(
                "name"=>$inputs['campany_name'],
                "contact_name"=>$inputs['contact_person'],
                "pobox"=>$inputs['P_O_BOX'],
                "contact_email"=>$inputs['email'],                
                "city"=>$inputs['City'],
                "payement_type"=>$inputs['payment_type'],
                "from"=>$inputs['contract_from'],
                "to"=>$inputs['contract_to'],

                ));
            if ($service) {
                            
               return Redirect::to('Insurance_management?msg=3');
                        }else{
                            
                            return Redirect::to('Insurance_management?msg=4');
                        }

        # code...
    }

    public function getService(){
     
  	if(isset($_GET['edit'])){

            $service_id=$_GET['edit'];            
			$Price_companies = Price_company::where('service_id',$service_id)->get(); 

            foreach ($Price_companies as $Price_company) {

                    $update = Price_company::whereRaw('service_id=? and company_id = ? ', array($service_id,$Price_company->company_id))->first();
                    $update->price=Input::get('campany_'.$Price_company->company_id);;
                    $update->save();
                    
                    }

                                //
			if ($update) {
                            
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
				"name"=>$inputs['service_name']				
				));

            

			if ($service) {
                            
                $Service_id =$service->id;
                $Campanies =InsuranceCompany::all();

                $cash_price = Price_company::create(array(
                "service_id"=> $Service_id,             
                "company_id"=>0,  // zero is used as campany_id for cash doesn't reference in any table           
                "price"=>$inputs['cash']

                )); 
                
                foreach ($Campanies as $Campany) {

                    $Campany_id = $Campany->id;

                    $Price_company = Price_company::create(array(
                    "service_id"=> $Service_id,             
                    "company_id"=>$Campany_id ,             
                    "price"=>$inputs['Campany_'.$Campany_id.''] 

                        ));
                    

                    }


			   return Redirect::to('service_management?msg=1');
                        }else{
                           
                            return Redirect::to('service_management?msg=2');
                        }
  	
          }  
    public function getReports(){
            return View::make("billing.reports_billing");
    }
    
    public function get_patient_invoice(){
            return View::make("billing.invoice_pdf");
    }

    public function getProfile(){
            return View::make("billing.profile_billing");
    }
    public function getAccount(){
        return View::make("billing.My_account_billing");
    }
      
    public function profile(){
        
        $id = Input::get('id');
        $patients_payments = Payment::whereRaw('status=? and patient_id = ? ', array('unpaid',$id))->get();
        

        return View::make('billing.showPayements')->with('patients_payments',$patients_payments);
    }   
    
    public function campanyPrice(){
        
        $id = Input::get('id');      

        return View::make('billing.showCampanyPrice')->with('service_id',$id); 
    }  

    public function provide_payments(){

            
            if(isset($_POST['add'])){

            $name = $_POST['add'];
            foreach ($name as $Payment) {

             $Payment_id = $Payment;

             $update = Payment::find($Payment_id);
             $update->status='paid';
             $update->save();

                    }
           
            return Redirect::to('Pending_bills?msg=1');
                }else{
             
            return Redirect::to('Pending_bills?msg=2');     
                }
            

        
       
   
    }

  public function destroyCampany($id){
            $campany = InsuranceCompany::find($id);
            $campany->delete();
        }
 

  public function addCampanyPrice(){

        return View::make("billing.add_campany_price");
  }

  public function saveCampanyPrice(){

        $Services =Service::all(); 
        $campany_id = $_GET['cmp'];                          
            
        foreach ($Services as $Service) {
         

            $price_companie = Price_company::create(array(

                "service_id"=>$Service->id,
                "company_id"=>$campany_id,
                "price"=>Input::get('service'.$Service->id.'')

                ));

        }   

        if ($price_companie) {
                

               return Redirect::to('Insurance_management?msg=1');

                        }else{
                            
                            return Redirect::to('Insurance_management?msg=2');
                        }                                  
  }

 }
 