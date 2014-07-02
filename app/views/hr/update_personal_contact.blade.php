@extends('dashboard')
@section('main')


<h1 class="page-title"><i class="icon-th-large"></i>Update Person Contact</h1>
<div class="widget-content">
<<<<<<< HEAD
	<form id="contactform" action="{{URL::to('person/contact/update/' . $person->id )}}" method="POST">
=======
	<form id="contactform" action="{{URL::to('person/person_contact/' . $person->id )}}" method="POST">
>>>>>>> d2ea20ab5743f3e34b98e9c0ab1ef5878fbd3241
        <div class="span4 pull-left">                        
        	<h4>Personal Contact Information</h4>
	        <div class="control-group">
				<label class="control-label" for="mobilephone">Mobile Phone Number*</label>
				<div class="controls">
<<<<<<< HEAD
                 <input type ="hidden" id="uid" name="uid" value={{$person->id}}>
				<input type="text" class="input-xlarge " id="" name="mobilephone" value={{$person->mobile_phone}}>
=======
				<input type="text" class="input-xlarge " id="" name="mobilephone" value="{{$person->phone_no}}">
>>>>>>> d2ea20ab5743f3e34b98e9c0ab1ef5878fbd3241
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="telephone">Telephone Number</label>
				<div class="controls">
				<input type="text" class="input-xlarge " id="" name="telephone" value={{$person->telephone}}>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="email">Email Address</label>
				<div class="controls">
				<input type="text" class="input-xlarge " id="" name="email" value={{$person->email}}>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="mailing">Physical Address</label>
				<div class="controls">
<<<<<<< HEAD
				<textarea rows="3" name="mailing" class="input-xlarge" value={{$person->mailing_address}}></textarea>
=======
				<textarea rows="3" name="mailing" class="input-xlarge" value="{{$person->offc_mailing_address}}"></textarea>
>>>>>>> d2ea20ab5743f3e34b98e9c0ab1ef5878fbd3241
				</div>
			</div>
			<button type="reset" class="btn">Cancel</button>
			<button type="submit" class="btn">Update</button>
        </div>		
	</div>
@stop