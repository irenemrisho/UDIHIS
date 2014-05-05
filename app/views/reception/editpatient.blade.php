@extends('dashboard')
@section('main')
<h1 class="page-title">
<i class="icon-th-large"></i>
Manage Patients                   
</h1>


<div class="row">

<div class="span9">


<div class="widget-header">
<h3>Edit Patient Information</h3>
</div> <!-- /widget-header -->

<div class="widget-content">
<div class="tabbable">
<ul class="nav nav-tabs">
<li class="active">
<a href="#2" data-toggle="tab">Personal Information</a>
</li>
<li class=""><a href="#1" data-toggle="tab">Initial Patient Information</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active " id="1">



    <div id="alrt" class="alert alert-success alert-dismissable" style="display:none;z-index:3000;position:absolute;margin-left: 160px; margin-top:150px">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Successfully updated! Redirecting...</strong>
    </div>

    @if(isset($message))
    <div class="alert alert-info" id="message">{{ $message }}</div>
    @endif

<?php
        $patient_id = $patient->id;
        $pt         = Patients_visit::where('patient_id', $patient_id)->first();


?>


    <form id="myWizard" type="get" action="">

        <section style="display:none" class="step" data-step-title="Initial Information">
            <fieldset >

                <div class="span4 pull-left">


                  
                    <div class="control-group">
                        <label class="control-label" for="">Height</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge " id="" value="{{$pt->height}}" name="height"  />

                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->
                    <div class="control-group">
                        <label class="control-label" for="">Weight</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge " id="" value="{{$pt->weight}}" name="weight"  />

                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->

                    <div class="control-group">
                        <label class="control-label" for="password">Allergy</label>
                        <div class="controls">
                            <select class="form-control" name="allergy">
                                <option disabled>{{$pt->allergy}}</option>
                                <option>Skin</option>
                                <option>Asthma</option>
                                <option>None</option>
                            </select>
                        </div>

                    </div> <!-- /control-group -->



                </div>

                <div class="span4 pull-right">
                    
                    <div class="control-group">
                        <label class="control-label" for="temperature">Temperature</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge " id="" value="{{$pt->temperature}}" name="temperature" />

                        </div> <!-- /controls -->
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="bp">Blood Pressure</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge " id="" value="{{$pt->bloodpressure}}" name="bloodpressure" >

                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->

                    <div class="control-group">
                        <label class="control-label" for="gender">Blood Group</label>
                        <div class="controls">
                            <select class="form-control" name="bloodgroup">
                                <option disabled>{{$pt->bloodgroup}} Group</option>
                                <option>A</option>
                                <option>B</option>
                                <option>O</option>
                                <option>AB</option>
                            </select>
                        </div>

                    </div> <!-- /control-group -->
                    <div class="control-group">
                        <label class="control-label" for="gender">Rhesus Factor</label>
                        <div class="control-group ">
                            <label class="radio">
                                <input type="radio" name="rhesus" id="" value="positive" >
                                Positive
                            </label>
                            <label class="radio">
                                <input type="radio" name="rhesus" id="" value="negative">
                                Negative</label>

                        </div>

                    </div> <!-- /control-group -->
                </div>


            </fieldset>
        </section>



        <section style="display:none" class="step" id="last" data-step-title="More Information">




            <fieldset >
                <div class="span4 pull-left">
                    

                    <div class="control-group ">
                        <h4>Payment Type</h4>
                        <label class="radio">
                            <input type="radio" name="paymenttype" id="" value="Cash" checked>
                            Cash
                        </label>
                        <label class="radio">
                            <input type="radio" name="paymenttype" id="" value="NHIF">
                            NHIF</label>

                    </div>




                </div>
                <div class="span4 pull-right" style="margin-left:4px;">

                
                    <label class="control-label">Direct To &raquo</label>
                    <p>SECTION</p>
                    <select id="section" name="section" class="form-control">
                        <option></option>
                        <option>OPD</option>
                        <option>IPD</option>
                        <option>ANC</option>
                    </select>

                    <div id="section-more">

                    </div>

                </div>

            </fieldset>
        </section>
    </form>

    <div>
    </div>

</div>


<div class="tab-pane active" id="2">

<div class="widget-table">

<div class="">
    <div class="span4 pull-left">

<h4>Personal Information </h4>
<form id="pform" action="{{url("patients/edit")}}" method="POST">

<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->firstname}}" name="first_name" required  placeholder=""/>

</div> <!-- /controls --> 
</div>


<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->lastname}}" name="last_name" required placeholder="" />

</div> <!-- /controls -->               
</div> <!-- /control-group -->

    <div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->tribe}}" name="tribe" required placeholder="" />

</div> <!-- /controls -->
</div> <!-- /control-group -->
    <div class="control-group">
<div class="controls">
<select class="form-control"  data-placement="gender" value = "{{$patient->religion}}" name="religion" required>
<option disabled>Select Religion</option>
<option>Christian</option>
<option>Islamic</option>
</select>
</div> <!-- /controls -->
</div> <!-- /control-group -->

<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge" id="birthdate" value="{{$patient->birth}}"  name="birth" required  placeholder=""/>

</div> <!-- /controls --> 
</div>
<div class="control-group">
<div class="controls">
<select class="form-control"  data-placement="gender" name="gender"  value = "{{$patient->gender}}"required>
<option disabled> Select Gender</option>

<option>Male</option>
<option>Female</option>
</select>
</div>                                       

</div> <!-- /control-group -->


    <h4 class = "text-left">Contact Information</h4>

    <div class="control-group">

        <div class="controls">
            <input type="text" class="input-xlarge " id="phone_no" value="{{$patient->phone_no}}" name="phone_no" placeholder = "">

        </div> <!-- /controls -->
    </div> <!-- /control-group -->

    <div class="control-group">

        <div class="controls">
            <input type="text" class="input-xlarge " id="" name="telephone_no" placeholder = "">

        </div> <!-- /controls -->
    </div> <!-- /control-group -->
    <div class="control-group">

        <div class="controls">
            <input type="email" class="input-xlarge " id="" value = "{{$patient->email}}" name="email" placeholder = "">

        </div> <!-- /controls -->
    </div>

</div>
<div class="span4 pull-right" style="margin-left:4px;">
    <h4 class = "text-left">Physical address</h4>

    <div class="control-group">

        <div class="controls">
            <select class="form-control"  data-placement="district" name="district" value = "{{$patient->district}}"required >
                <option disabled>Select District</option>
                <option>Kiondoni</option>
                <option>Ilala</option>
                <option>Temeke</option>
            </select>

        </div> <!-- /controls -->
    </div> <!-- /control-group -->

    <div class="control-group">

        <div class="controls">
            <input type="text" class="input-xlarge " id="" value = "{{$patient->street}}" name="street" placeholder = "">

        </div> <!-- /controls -->
    </div> <!-- /control-group -->
    <div class="control-group">

        <div class="controls">
            <input type="text" class="input-xlarge " id="" value = "{{$patient->house_no}}" name="house_no" placeholder = "">

        </div> <!-- /controls -->
    </div>

<h4>Next of Kin Information </h4>
<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->fullname}}" name="fullname" required  placeholder=""/>

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->phone2}}" name="phone2" required  placeholder=""/>

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->location}}" name="location"  required  placeholder=""/>

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{$patient->workingplace}}" name="workingplace" required  placeholder=""/>


</div> <!-- /controls -->               
</div> <!-- /control-group -->
<p><button type="submit" class="btn btn-primary" id="psave">Save</button></p>

</form>             
  


</div>

</div>  
</div>
</div>
</div>
</div>
</div>  


@stop