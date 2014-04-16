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


    public function __construct(){
            $this->beforeFilter('auth', array('*'));
    }

    public function getIndex(){
            return View::make("admin.admini_page");
    }
    		public function manage_user(){
            return View::make("admin.manage_user");
    }


     public function editUser($id){
            $inputs = Input::all();
            $user   = User::find($id);
            $user->first_name = $inputs['fn']; 
            $user->last_name = $inputs['ln']; 
            $user->middle_name = $inputs['mn']; 
            $user->address = $inputs['a']; 
            $user->level =   $inputs['l']; 
            $user->contact = $inputs['c']; 
            $user->email = $inputs['e']; 
            $user->status = $inputs['st'];
            $user->save();
            return "ok";
     }

    public function search(){
          $user = Input::get('u');

          $users = User::where('first_name', 'LIKE', '%'.$user.'%')->get();



          $res = "<thead>
                    <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Designation</th>
                    <th>Status</th>
                    <th>Last Access</th>
                    <th>operation</th>
                    </tr>
                </thead>
                <tbody>";

          foreach($users as $u){
                $res .= "<tr>
                            <td>".$u->id."</td>
                            <td>".$u->first_name."</td>
                            <td>".$u->last_name."</td>
                            <td>".User::level($u->level)."</td>
                            <td>".$u->status."</td>
                            <td>".User::ago($u->updated_at)."</td>
                            <td class='action-td' id=".$u->id.">
                            <a href='#myModal' class='btn btn-small btn-primary fetchuser'  data-toggle='modal'>
                            <i class='icon-pencil'></i>                             
                            </a>                    
                            <a href='javascript:;' class='btn btn-small btn-danger deleteuser'>
                            <i class='icon-trash'></i>                              
                            </a>
                        </td>
                        </tr>";
          }      

            $res .= "</tbody>";
                                                        
            return $res;                                       

    }

	public function addUser(){
			$inputs = Input::all();
			$usr = User::create(array(
				"email"=>$inputs['email'],
				"first_name"=>$inputs['first_name'],
				"last_name"=>$inputs['last_name'],
				"middle_name"=>$inputs['middle_name'],
				"level"=>$inputs['level'],
				"password"=>Hash::make($inputs['password']),
				"address" =>$inputs['address'],
				"contact"=>$inputs['contact'],
                "updated_at"=>"0000-00-00 00:00:00"
				));
			if ($usr) {
				return Redirect::to('manage_user');
			}
  	}
  }
    //put your code here