<?php
use Illuminate\Auth\UserInterface;
class Room extends Eloquent implements UserInterface {
	protected $table = 'rooms';
	protected $guarded=array('id');
	
}