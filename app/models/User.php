<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    /**
     * The database table used by the model.
     *
     * @var string
     */


    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }



    public static function active($s){
        if($s == "active"){
            return "checked";
        }else{
            return "";
        }
    }

    public static function blocked($s){
        if($s == "blocked"){
            return "checked";
        }else{
            return "";
        }
    }

        public $timestamps = "false";

        public static function  ago($datetime, $full = false)
    {
            
            if($datetime == '0000-00-00 00:00:00'){
                return 'never';
            }else{
                $now = new DateTime;
                $ago = new DateTime($datetime);
                $diff = $now->diff($ago);

                $diff->w = floor($diff->d / 7);
                $diff->d -= $diff->w * 7;

                $string = array(
                    'y' => 'year',
                    'm' => 'month',
                    'w' => 'week',
                    'd' => 'day',
                    'h' => 'hour',
                    'i' => 'minute',
                    's' => 'second',
                );
                foreach ($string as $k => &$v) {
                    if ($diff->$k) {
                        $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                    } else {
                        unset($string[$k]);
                    }
                }

                if (!$full) $string = array_slice($string, 0, 1);
                return $string ? implode(', ', $string) . ' ago' : 'just now';
                }
    }

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
    protected $guarded = array();


    
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
        else if($lv == 6){
            return "Nurse";
        }
        else if($lv == 7){
            return "HR Officer";
        }
    }

    public function appointment(){
        return $this->hasMany('Appointment','user_id','id');

    }
      public function patient(){
        return $this->hasMany('Patient','user_id','id');

    }

    public function notification(){
        return $this->belongsTo('Notification','notification_id','id');

    }

}
