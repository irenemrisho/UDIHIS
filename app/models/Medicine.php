<?php
use Illuminate\Auth\UserInterface;
class Medicine extends Eloquent implements UserInterface {
	protected $table = 'medicines';
	protected $guarded=array('id');
	
}