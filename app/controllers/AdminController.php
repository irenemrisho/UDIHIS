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


    public function __construct()
    {
            $this->beforeFilter('auth', array('*'));
    }

    public function getIndex()
    {
            return View::make("admin.admini_page");
    }

    public function admin_profile()
    {
        
             return View::make('admin.admin_profile');
    }

     public function editUser($id){


            $inputs = Input::all();
            $user   = User::find($id);

            $user->first_name = $inputs['first_name']; 
            $user->last_name = $inputs['last_name']; 
            $user->middle_name = $inputs['middle_name']; 
            $user->phone_no = $inputs['phone_no']; 
            $user->level =   $inputs['level']; 
            $user->extension_no = $inputs['extension_no']; 
            $user->email = $inputs['email']; 
            $user->status = $inputs['status'];
            $user->room_no = $inputs['room_no'];
            $user->username = $inputs['username'];
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

    public function manageNoticeboard(){
        return View::make('admin.noticeboard');
    }

    public function addNoticeboard(){

        $notice = new Notification();
        $notice->title=Input::get('title');
        $notice->message=Input::get('message');
        $notice->date=Input::get('date');
        $notice->save();

        return Redirect::to('manage_noticeboard');
    }
  }
    //put your code here 