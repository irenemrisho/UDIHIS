<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class BillingController extends BaseController {
 public function getIndex(){
            return View::make("billing.billing");
    }
    public function getBills(){
        return View::make('billing.Pending_bills');
    }
    public function getInsurance(){
        return View::make('billing.Insurance_management');
    }
}
