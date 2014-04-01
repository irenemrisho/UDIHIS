<?php
use Illuminate\Auth\UserInterface;
class Recommended_medicine extends Eloquent implements UserInterface {
	protected $table = 'recommended_medicines';
	protected $guarded=array('id');
	
}