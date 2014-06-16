<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author irene
 */
class UserController extends BaseController {

    
    public function __construct(){
            $this->beforeFilter('auth', array('except'=>array('getIndex','login')));
    }

    protected $layout = 'layouts.master';



    public function getIndex() {
        $this->layout->content = View::make('login.login_page');
    }

    public function addUser() {
        $this->layout->content = View::make('admin.addUser');
    }

    public function storeUser() {
        User::create(Input::all());
    }

    public function login() {

        $userdata = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
            );

   if (Auth::attempt($userdata)) {

       if(Auth::user()->default_password == 1){

           return Redirect::to();

       }else{
           $level = Auth::user()->level;
           switch ($level) {
               case 0:
                   # code...
                   return Redirect::to('admin');
                   break;
               case 1:
                   # code...
                   return Redirect::to('dashboard');
                   break;
               case 2:
                   # code...
                   return Redirect::to('laboratory');
                   break;
               case 3:
                   # code...
                   return Redirect::to('reception');
                   break;
               case 4:
                   # code...
                   return Redirect::to('doctor');
               case 5:
                   # code...
                   return Redirect::to('billing');
                   break;
               case 6:
                   # code...
                   return Redirect::to('nurse');
                   break;
               case 7:
                   # code...
                   return Redirect::to('hr');
                   break;

               default:
                   # code...
                   break;
           }

       }




   }
   else{

        return View::make('login.login_page')->with('emsg', 'username/password incorrect!');
   }
       

}
        public function logout(){
            Auth::logout();
            return Redirect::to('login');
            
        }

        public function destroy($id){
            $user = User::find($id);
            $user->delete();
        }

        public function loaduser($id){
            $user = User::find($id);
            return View::make('admin.useredit', compact('user'));
        }

      

}
