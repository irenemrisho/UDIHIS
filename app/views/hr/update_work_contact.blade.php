@extends('dashboard')

@section('main')
@extends('dashboard')
@section('main')


<h1 class="page-title"><i class="icon-th-large"></i>Update Work Contact</h1>
<div class="widget-content">
	<form id="contactform" action="{{URL::to('person/work_contact/' . $person->id )}}" method="POST">
        <div class="span4 pull-left">                        
        	<h4>Work Contact Information</h4>
	        <div class="control-group">
				<label class="control-label" for="offcmobilephone">Mobile Phone Number*</label>
				<div class="controls">
				<input type="text" class="input-xlarge " id="" name="offcmobilephone" value="{{$person->offc_mobile_phone}}">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="offctelephone">Telephone Number</label>
				<div class="controls">
				<input type="text" class="input-xlarge " id="" name="offctelephone" value="{{$person->extension_no}}">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="offcemail">Email Address</label>
				<div class="controls">
				<input type="text" class="input-xlarge " id="" name="offcemail" value="{{$person->offc_email}}">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="offcmailing">Physical Address</label>
				<div class="controls">
				<textarea rows="3" name="offcmailing" class="input-xlarge" value="{{$person->offc_mailing_address}}"></textarea>
				</div>
			</div>
			<button type="reset" class="btn">Cancel</button>
			<button type="submit" class="btn">Update</button>
        </div>		
	</div>
@stop
@stop