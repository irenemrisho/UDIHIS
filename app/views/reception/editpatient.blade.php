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

                <div class="tab-pane active" id="1">
                    <div class="widget-table">
                        <div class="span4 pull-left">
    <form id="pform" action="{{url("patients/edit")}}" method="POST">

<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->firstname}}" name="firstname" required />

</div> <!-- /controls --> 
</div>


<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->lastname}}" name="lastname" required/>

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
<option>Marriend</option>
</select>
</div>  
</div> <!-- /control-group -->

<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge" id="birthdate" value="{{$patient->birth}}"  name="birth" required />

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
            <input type="text" class="input-xlarge " id="" name="telephone_no"value = "{{$patient->telephone_no}}">

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
            <input type="text" class="input-xlarge " id="" name="house_no" value = "{{$patient->housse_no}}">

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
<p><button type="submit" class="btn btn-primary" id="psave">Save</button></p>

</form>
                        </div>
                    </div>
                </div>
                 <div class="tab-pane " id="2">
                    <!-- todd list tunaweka pane ya patient visiti -->
                 </div>

            </div>
        </div>
    </div>
     


@stop