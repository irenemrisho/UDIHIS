@extends('dashboard')
@section('main')
<h1 class="page-title">
					<i class="icon-th-large"></i>
					Register Patient					
</h1>
<div class="widget-content">
<section class="step" data-step-title="Personal Information">
<fieldset >
 @if(isset($error))
<div class="alert alert-danger" id="message">{{ $error }}</div>
@endif	

<div class="span4 pull-left">

<h4>Personal Information </h4>
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
<input type="text" class="input-xlarge " id="" value="{{Input::get('tribe')}}" name="tribe" required placeholder="Tribe" />

</div> <!-- /controls -->
</div> <!-- /control-group -->
    <div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{Input::get('religion')}}" name="religion" required placeholder="Religion" />

</div> <!-- /controls -->
</div> <!-- /control-group -->

<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge date" id="" value="{{Input::get('birth')}}"  name="birth" required  placeholder=" Date of birth"/>

</div> <!-- /controls --> 
</div>
<div class="control-group">
<div class="controls">
<select class="form-control"  data-placement="gender" name="gender" required>
<option></option>

<option>Male</option>
<option>Female</option>
</select>
</div>                                       

</div> <!-- /control-group -->


    <h4 class = "text-left">Contact Information</h4>

    <div class="control-group">

        <div class="controls">
            <input type="text" class="input-xlarge " id="phone_no" name="phone_no" placeholder = "Mobile number">

        </div> <!-- /controls -->
    </div> <!-- /control-group -->

    <div class="control-group">

        <div class="controls">
            <input type="text" class="input-xlarge " id="" name="telephone_no" placeholder = "Telephone number">

        </div> <!-- /controls -->
    </div> <!-- /control-group -->
    <div class="control-group">

        <div class="controls">
            <input type="email" class="input-xlarge " id="" name="email" placeholder = "Email">

        </div> <!-- /controls -->
    </div>

</div>
<div class="span4 pull-right" style="margin-left:4px;">
    <h4 class = "text-left">Physical address</h4>

    <div class="control-group">

        <div class="controls">
            <select class="form-control"  data-placement="district" name="district" required>
                <option></option>
                <option>Kiondoni</option>
                <option>Ilala</option>
                <option>Temeke</option>
            </select>

        </div> <!-- /controls -->
    </div> <!-- /control-group -->

    <div class="control-group">

        <div class="controls">
            <input type="text" class="input-xlarge " id="" name="street" placeholder = "Street">

        </div> <!-- /controls -->
    </div> <!-- /control-group -->
    <div class="control-group">

        <div class="controls">
            <input type="text" class="input-xlarge " id="" name="house_no" placeholder = "House number">

        </div> <!-- /controls -->
    </div>

<h4>Next of Kin Information </h4>
<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{Input::get('fullname')}}" name="fullname" required  placeholder="Full Name"/>

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{Input::get('phone2')}}" name="phone2" required  placeholder="Phone Number"/>

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{Input::get('location')}}" name="location"  required  placeholder="Location"/>

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{Input::get('workingplace')}}" name="workingplace" required  placeholder="WOrking Place"/>


</div> <!-- /controls -->               
</div> <!-- /control-group -->
<p><button type="submit" class="btn btn-primary" id="psave">Save</button></p>

</form>

</div>	

</fieldset>	

</section>
</div>
@stop