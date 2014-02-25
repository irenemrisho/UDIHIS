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

        $username = Input::get('username');
        $password = Input::get('password');
        $validator = Validator::make(Input::all(), User::$rules);
        if ($validator->fails()) {
            $errors = $validator->messages();
            $this->layout->content = View::make('login.login_page', compact('errors'));
        } else {
            if (Auth::attempt(array('username' => $username, 'password' => $password))) {
                $level = Auth::user()->level;
                $l = trim($level);
                if ($l == "adm") {
                    $this->layout->content = View::make('admin.admini_page');
                } else {
                    
                }
            } else {
                $this->layout->content = View::make('login.login_page')->withErrors($validator);
            }
        }
    }

}
