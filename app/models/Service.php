<?php
use Illuminate\Auth\UserInterface;
class Service extends Eloquent implements UserInterface {
	protected $table = 'services';
	protected $guarded=array('id');
	
}