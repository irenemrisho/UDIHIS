<?php 
class SupplierController  extends BaseController{
    
public function index(){
            return View::make("supplies.supplies");
            
}

public function getRequest(){
	
		$product_requests= Product_request::where('status','=','open')->get();
        return View::make("supplies.request")->with('product_requests',$product_requests);
            
}

public function getSupplied(){
             $product_supplieds= Product_supply::get();
            return View::make("supplies.supplied")->with('product_supplieds',$product_supplieds);
            
}

public function getGoods(){

	if(isset($_GET['dlt'])){
            Product::destroy($_GET['dlt']);
            
        }
        
 	$goods = Product::get();
      
  return View::make("supplies.goods")->with('goods',$goods);
            
}

public function getProductRequest(){
        
        $id = $_GET['id'];
        
        $product_requests= Product_request::whereRaw('status=? and id = ? ', array('open',$id))->get();
        
        return View::make('supplies.showProvide')->with('product_requests',$product_requests);
 }

public function provideProductRequest(){

    $rq_q =$_GET['rq_q'];
    $rq_id= $_GET['rq_id'];
    $p_id = $_GET['p_id'];
    $us_id =$_GET['us_id'];

    $provided_product =  Input::get('request');

   
    $q_remain = $rq_q - $provided_product;

    if($q_remain> 0){
        $status = "open";
    }else{
        $status = "closed";
    }

   

    $Provide = Product_supply::create(array(
        "product_id"=>$p_id ,
        "user_id"=>$us_id,
        "quantity"=>$provided_product
        ));

    if ($Provide) {

                $Product = Product_request::where('id',$rq_id)
                                ->update(array(
                "status"=>$status,
                "quantity" =>$q_remain

                )); 

               return Redirect::to('supplies/request?msg=1');
            }else{
                
                return Redirect::to('supplies/request?msg=2');
            }       

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

