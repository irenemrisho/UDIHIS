@extends('dashboard')
@section('main')
<h1 class="page-title">
					<i class="icon-th-large"></i>
					Manage Appointments					
</h1>
    <div class="widget-content">

<div class="tabbable">
<ul class="nav nav-tabs">
    <li class="active">
        <a href="#1" data-toggle="tab">New Appointment</a>
    </li>
    <li class=""><a href="#2" data-toggle="tab">Search Appointment</a></li>

</ul>
<section class="step" data-step-title="Personal Information">
<fieldset >
 @if(isset($error))
<div class="alert alert-danger" id="message">{{ $error }}</div>
@endif	
<div class = "tab-content">
<div class="tab-pane active" id = "1">

<h4>Contact Information </h4>
<form id="pform" action="{{url("patients/add")}}" method="POST">

<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{Input::get('firstname')}}" name="firstname" required  placeholder="First Name"/>

</div> <!-- /controls --> 
</div>


<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{Input::get('lastname')}}" name="lastname" required placeholder="Last Name" />

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge" id="birthdate" value="{{Input::get('birth')}}"  name="birth" required  placeholder=" Date of birth"/>

</div> <!-- /controls --> 
</div>
    <div class="control-group">

        <div class="controls">
            <input type="text" class="input-xlarge " id="phone_no" name="phone_no" placeholder = "Mobile number">

        </div> <!-- /controls -->
    </div> <!-- /control-group -->             
 <!-- /control-group -->
<p><button type="submit" class="btn btn-primary" id="psave">Save</button></p>

</form>
</div>
<div class = "tab-pane" id = "2">

makorokocho

</div>
</div>

</div>	

</fieldset>	

</section>
</div>
</div>
@stop