@extends('dashboard')
@section('main')
<h1 class="page-title">
					<i class="icon-th-large"></i>
					Register Patient					
</h1>
<section class="step" data-step-title="Personal Information">

<fieldset >
<div class="span4 pull-left">

<h4>Personal Information </h4>
<form id="pform" action="{{url("patients/add")}}" method="POST">

<div class="control-group"> 
<label class="control-label" for="first_name">First name</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="" name="firstname"  />

</div> <!-- /controls --> 
</div>

<div class="control-group">                                         
<label class="control-label" for="last_name">Last name</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="" name="lastname"  />

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">                                         
<label class="control-label" for="address">Address</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" name="address">

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group"> 
<label class="control-label" for="first_name">Date of birth</label>
<div class="controls">
<input type="text" class="input-xlarge date" id="" value="" name="birth" />

</div> <!-- /controls --> 
</div>

<div class="control-group">                                         
<label class="control-label" for="contact">Phone number</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" name="phone">

</div> <!-- /controls -->               
</div> <!-- /control-group -->

<div class="control-group">  
<label class="control-label" for="gender">Gender</label>
<div class="controls">
<select class="form-control" name="gender">
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
<input type="text" class="input-xlarge " id="" value="" name="fullname"  />

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">                                         
<label class="control-label" for="">Phone Number</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="" name="phone2"  />

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">                                         
<label class="control-label" for="">Location</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="" name="location"  />

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">                                         
<label class="control-label" for="">Working place</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="" name="workingplace"  />

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<p><button type="submit" class="btn btn-primary" id="psave">Save</button></p>

</form>

</div>	

</fieldset>	

</section>
@stop