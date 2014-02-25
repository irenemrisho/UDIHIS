<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author irene
 */
class AdminController  extends BaseController{
    
    protected $layout= "layouts.master";
            public function getIndex(){
            $this->layout->content= view::make("admin.admini_page");
    }
    //put your code here
}
