<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    /**
     * The database table used by the model.
     *
     * @var string
     */

    protected $table = 'users';
//    protected $fillable = array('user_id','password','s_name');
//    public $timestamps = false;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');
    public static $rules = array('email' => 'required', 'password' => 'required|min:5');
    protected $fillable = array('last_name','password','first_name','address','middle_name','level','email','contact');

    
    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier() {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword() {
        return $this->password;
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail() {
        return $this->email;
    }

    public static function level($lv) {
        if($lv == 1){
            return "Pharmacist";
        }else if($lv == 2){
            return "Lab Tech";
        }else if($lv == 3){
            return "Receptionist";
        }else if($lv == 4){
            return "Doctor";
        }else if($lv == 5){
            return "Accountant";
        }
    }

    public function appointment(){
        return $this->hasMany('Appointment','user_id','id');

    }
      public function patient(){
        return $this->hasMany('Patient','user_id','id');

    }

}
