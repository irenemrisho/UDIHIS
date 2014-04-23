@extends('dashboard')
@section('main')
<h1 class="page-title">
					<i class="icon-th-large"></i>
					Edit patient information					
</h1>
<div class="widget-content">
<section class="step" data-step-title="Personal Information">
<fieldset >
 @if(isset($error))
<div class="alert alert-danger" id="message">{{ $error }}</div>
@endif	

<div class="span4 pull-left">

<h4>Personal Information </h4>
<form id="pform" action="{{url("patient/edit/{$patient->id}")}}" method="POST">

<div class="control-group"> 
<label class="control-label" for="first_name">First name</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->firstname}}" name="firstname" required />

</div> <!-- /controls --> 
</div>

<div class="control-group">                                         
<label class="control-label" for="last_name">Last name</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->lastname}}" name="lastname" required />

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">                                         
<label class="control-label" for="address">Address</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->address}}" name="address">

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group"> 
<label class="control-label" for="first_name">Date of birth</label>
<div class="controls">
<input type="text" class="input-xlarge date" id="" value="{{$patient->birth}}"  name="birth" required />

</div> <!-- /controls --> 
</div>

<div class="control-group">                                         
<label class="control-label" for="contact">Phone number</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->phone}}" name="phone" required>

</div> <!-- /controls -->               
</div> <!-- /control-group -->

<div class="control-group">  
<label class="control-label" for="gender">Gender</label>
<div class="controls">
<select class="form-control" name="gender" required>
<option></option>	
<option>Male</option>
<option>Female</option>
</select>
</div>                                       

</div> <!-- /control-group -->


</div>
<div class="span4 pull-right" style="margin-left:4px;">

<h4>Next of Kin Information </h4>
<div class="control-group">                                         
<label class="control-label" for="">Full Name</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->fullname}}" name="fullname" required  />

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">                                         
<label class="control-label" for="">Phone Number</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->phone2}}" name="phone2" required  />

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">                                         
<label class="control-label" for="">Location</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->location}}" name="location"  required />

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">                                         
<label class="control-label" for="">Working place</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->workingplace}}" name="workingplace" required  />

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<p><button type="submit" class="btn btn-primary" id="psave">Update information</button></p>

</form>

</div>	

</fieldset>	

</section>
</div>
@stop