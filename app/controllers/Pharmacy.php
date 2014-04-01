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
   
}
