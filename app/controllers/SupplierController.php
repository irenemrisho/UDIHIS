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
            return View::make("supplies.goods");
            
}

public function getReports(){
            return View::make("supplies.reports");
            
}

public function getAccount(){
            return View::make("supplies.account");
            
}

}

