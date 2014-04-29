@extends('dashboard')
@section('main')
<h1 class="page-title">
					<i class="icon-th-large"></i>

					Edit patient information

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

<div class="controls">
    <label class="control-label" for="firstname">First name</label>
<input type="text" class="input-xlarge " id="" value="{{$patient->firstname}}" name="first_name" required />

</div> <!-- /controls -->
</div>

<div class="control-group">
<label class="control-label" for="last_name">Last name</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->lastname}}" name="last_name" required />

</div> <!-- /controls -->
</div> <!-- /control-group -->
    <div class="control-group">
        <label class="control-label" for="contact">Religion</label>
        <div class="controls">
            <input type="text" class="input-xlarge " id="" value="{{$patient->religion}}" name="religion" required>

        </div> <!-- /controls -->
    </div> <!-- /control-group -->
    <div class="control-group">
        <label class="control-label" for="contact">Tribe</label>
        <div class="controls">
            <input type="text" class="input-xlarge " id="" value="{{$patient->tribe}}" name="tribe" required>

        </div> <!-- /controls -->
    </div> <!-- /control-group -->
    <div class="control-group">
        <label class="control-label" for="first_name">Date of birth</label>
        <div class="controls">
            <input type="text" class="input-xlarge date" id="" value="{{$patient->birth}}"  name="birth_date" required />

        </div> <!-- /controls -->
    </div>

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

    <h4>Contact Information </h4>
<div class="control-group">
<label class="control-label" for="address">Mobile Number</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->mobile_no}}" name="mobile_no">

</div> <!-- /controls -->
</div> <!-- /control-group -->


<div class="control-group">
<label class="control-label" for="contact">Telephone Number</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->telephone_no}}" name="telephone_no" required>

</div> <!-- /controls -->
</div> <!-- /control-group -->
    <div class="control-group">
<label class="control-label" for="contact">Email</label>
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->email}}" name="email" required>

</div> <!-- /controls -->
</div> <!-- /control-group -->
</div>
<div class="span4 pull-right" style="margin-left:4px;">
   <h4>Physical Address</h4>
    <div class="control-group">

        <div class="controls">
            <label class="control-label" for="contact">District</label>
             <input type="text" class="input-xlarge " id="" value="{{$patient->district}}" name="district" required>

        </div> <!-- /controls -->
    </div> <!-- /control-group -->
    <div class="control-group">
        <label class="control-label" for="contact">House Number</label>
        <div class="controls">
            <input type="text" class="input-xlarge " id="" value="{{$patient->house_no}}" name="house_no" required>

        </div> <!-- /controls -->
    </div> <!-- /control-group -->
    <div class="control-group">
        <label class="control-label" for="contact">Street</label>
        <div class="controls">
            <input type="text" class="input-xlarge " id="" value="{{$patient->street}}" name="street" required>

        </div> <!-- /controls -->
    </div> <!-- /control-group -->

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