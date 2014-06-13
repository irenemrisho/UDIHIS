<?php 
class SupplierController  extends BaseController{
    
public function index(){
            return View::make("supplies.supplies");
            
}

public function getRequest(){
            return View::make("supplies.request");
            
}

public function getSupplied(){
            return View::make("supplies.supplied");
            
}

public function getGoods(){

	if(isset($_GET['dlt'])){
            Product::destroy($_GET['dlt']);
            
        }
        
 	$goods = Product::get();
      
  return View::make("supplies.goods")->with('goods',$goods);
            
}

public function addGoods(){
	$inputs = Input::all();
            $Product = Product::create(array(
                "name"=>$inputs['name'],
                "quantity" =>$inputs['quantity']

                ));
            if ($Product) {
                            
               return Redirect::to('supplies/goods?msg=1');
            }else{
                
                return Redirect::to('supplies/goods?msg=2');
            }
}

public function getEditGood(){
        
        return View::make('supplies.edit_good');
        
    }

public function updateGood(){

$inputs = Input::all();
            $Product = Product::where('id',$_GET['edit'])
                                ->update(array(
                "name"=>$inputs['name'],
                "quantity" =>$inputs['quantity']

                ));
            if ($Product) {
                            
               return Redirect::to('supplies/goods?msg=3');
                        }else{
                            
                            return Redirect::to('supplies/goods?msg=4');
                        }
}

public function getReports(){
            return View::make("supplies.reports");
            
}

public function getAccount(){
            return View::make("supplies.account");
            
}

}

