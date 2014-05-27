@extends('dashboard')
@section('main')

<h1 class="page-title"><i class="icon-th-large"></i>Manage Patients</h1>

<div class="row">
<div class="span9">
<div class="widget-header">
<h3>Edit Patient Information</h3>
</div> 

<div class="widget-content">
<div class="tabbable">
<ul class="nav nav-tabs">
<li class="active"><a href="#1" data-toggle="tab">Personal Information</a></li>
<li class=""><a href="#2" data-toggle="tab">Initial Patient Information</a></li>
</ul>
</div>

<div class="tab-content" >
<div class="tab-pane active" id="1">
<div class="widget-table">
<div class="span4 pull-left">
<form id="pform" action="{{url("patient/edit/$patient->id")}}" method="POST">

<div class="control-group">
<label class="control-label" for="username">First Name</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->firstname}}" name="first_name" required />

</div> <!-- /controls --> 
</div>


<div class="control-group">
<label class="control-label" for="username">Last Name</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->lastname}}" name="last_name" required/>

</div> <!-- /controls -->               
</div> <!-- /control-group -->

<div class="control-group">
<label class="control-label" for="username">Gender</label>
<div class="controls">
<select class="form-control"  data-placement="gender" name="gender"  value = "{{$patient->gender}}" required>
<option disabled> Select Gender</option>
<option></option>
<option>Male</option>
<option>Female</option>
</select>
</div> 
</div> <!-- /control-group -->

<div class="control-group">
<label class="control-label" for="username">Marital Status</label>
<div class="controls">
<select class="form-control"  data-placement="marital_status" name="marital_status"  value = "{{$patient->marital_status}}">
<option disabled> Select Marital Status</option>
<option></option>
<option>Single</option>
<option>Married</option>
</select>
</div>  
</div> <!-- /control-group -->

<div class="control-group">
<label class="control-label" for="username">Birth Date</label>
<div class="controls">
<input type="text" class="input-xlarge" id="birthdate" value="{{$patient->birth}}"  name="birth_date" required />

</div> <!-- /controls --> 
</div><!-- /control-group --> 

<div class="control-group">
<label class="control-label" for="username">Nationality</label>
<div class="controls">
<select class="form-control"  data-placement="nationality" name="nationality"  value = "{{$patient->nationality}}">
<option disabled> Select Nationality</option>
<option></option>
<option>tanzania</option>
<option>kenya</option>
</select>
</div>  
</div> <!-- /control-group -->

<div class="control-group">
<label class="control-label" for="username">Designation</label>
<div class="controls">
<select class="form-control"  data-placement="designation" name="designation"  value = "{{$patient->designation}}">
<option disabled> Select Designation</option>
<option></option>
<option>Dr</option>
<option>Bank Manager</option>
</select>
</div>                                       

</div> <!-- /control-group -->

<div class="control-group">
<label class="control-label" for="username">Religion</label>
<div class="controls">
<select class="form-control"  data-placement="religion" name="religion" value = "{{$patient->religion}}">
<option disabled>Select Religion</option>
<option></option>
<option>Christian</option>
<option>Islamic</option>
</select>
</div> <!-- /controls -->
</div> <!-- /control-group -->

<div class="control-group">
<label class="control-label" for="username">Tribe</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->tribe}}" name="tribe"  />
</div> <!-- /controls -->
</div> <!-- /control-group -->

</div>

<div class="span4 pull-right" style="margin-left:4px;">

<h4 class = "text-left">Contact Information</h4>

<div class="control-group">

<div class="controls">
<input type="text" class="input-xlarge " id="phone_no" name="phone_no" value = "{{$patient->phone_no}}">

</div> <!-- /controls -->
</div> <!-- /control-group -->

<div class="control-group">

<div class="controls">
<input type="text" class="input-xlarge " id="telephone_no" value="{{$patient->telephone_no}}" name="telephone_no" placeholder = "">


</div> <!-- /controls -->
</div> <!-- /control-group -->
<div class="control-group">

<div class="controls">
<input type="email" class="input-xlarge " id="" name="email"  value = "{{$patient->email}}">

</div> <!-- /controls -->
</div>

<h4 class = "text-left">Physical address</h4>

<div class="control-group">

<div class="controls">
<select class="form-control"  data-placement="district" name="district" required value = "{{$patient->district}}">
<option disabled>Select District</option>
<option>Kiondoni</option>
<option>Ilala</option>
<option>Temeke</option>
</select>

</div> <!-- /controls -->
</div> <!-- /control-group -->

<div class="control-group">

<div class="controls">
<input type="text" class="input-xlarge " id="" name="street" value = "{{$patient->street}}">

</div> <!-- /controls -->
</div> <!-- /control-group -->
<div class="control-group">

<div class="controls">
<input type="text" class="input-xlarge " id="" name="house_no" value = "{{$patient->house_no}}">

</div> <!-- /controls -->
</div>

<h4>Next of Kin Information </h4>
<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value = "{{$patient->fullname}}" name="fullname"/>

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value = "{{$patient->phone2}}" name="phone2"/>

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value = "{{$patient->location}}" name="location" />

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value = "{{$patient->workingplace}}" name="workingplace"  />


</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">
<div class="controls">
<button type="reset" class="btn btn-warning" id="cancel" name = "cancel" value = "Cancel">Cancel</button>
<button type="submit" class="btn btn-primary" id="psave">Save</button>
</div> <!-- /controls -->               
</div> <!-- /control-group -->
</form>
</div>
</div>
</div>
<div class="tab-pane " id="2">
<div class="widget-table">
<div class="span4 pull-left">


<form id="pform" action="{{url("patient/editInitial/$patient->id")}}" method="POST">

<div class="control-group">
<label class="control-label" for="username">Height (cm)</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="" name="height" required />

</div> <!-- /controls --> 
</div>


<div class="control-group">
<label class="control-label" for="username">Weight (kg)</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="" name="weight" required/>

</div> <!-- /controls -->               
</div> <!-- /control-group -->


<div class="span4 pull-right" style="margin-left:4px;">

<div class="control-group">
<label class="control-label" for="username">Blood Group</label>
<div class="controls">
<input type="text" class="input-xlarge" id="" value=""  name="blood_group" required />

</div> <!-- /controls --> 
</div><!-- /control-group --> 

<div class="control-group">
<label class="control-label" for="username">Blood Pressure</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="" name="blood_pressure"  />
</div> <!-- /controls -->
</div> <!-- /control-group -->

</div>
<div class="control-group">
<div class="controls">
<button type="reset" class="btn btn-warning" id="cancel" name = "cancel" value = "Cancel">Cancel</button>
<button type="submit" class="btn btn-primary" id="psave">Save</button>
</div> <!-- /controls -->               
</div> <!-- /control-group -->
</form>


</div>
</div>
</div>
</div>
</div>
</div>
</div>
@stop