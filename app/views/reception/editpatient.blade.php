@extends('dashboard')
@section('main')

<h1 class="page-title"><i class="icon-th-large"></i>Manage Patients</h1>

<div class="row">

    <div class="span9">
    <!-- /widget-header -->
    <div class="widget-header"><h3>Edit Patient Information</h3></div> 

    <div class="widget-content">
        <div class="tabbable">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#1" data-toggle="tab">Personal Information</a></li>
                <li class=""><a href="#2" data-toggle="tab">Initial Patient Information</a></li>
            </ul>
        </div>

    <div class="tab-content">
        <div class="tab-pane" id="1">

        <div class="span4 pull-left">

            <h4>Personal Information</h4>
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
</div>  


@stop