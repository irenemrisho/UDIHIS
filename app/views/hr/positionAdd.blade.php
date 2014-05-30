@extends('dashboard')
@section('main')
<h1 class="page-title"><i class="icon-th-large"></i>Add Position</h1>
<div class="widget-content" >
    @if(isset($error))
    <div class="alert alert-danger" id="message">{{ $error }}</div>
    @endif
    <div class="span8" >
        <h4 style="text-align: center">Position Information </h4>
        <form  class="form-horizontal" id="addform" action="{{url("position/add")}}" method="POST">

        <div class="control-group">
            <label class="control-label" for="position_name">Position Name*</label>
            <div class="controls" >
                <input type="text" class="input-xlarge " id="" value="" name="position_name" required/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="facility">Facility*</label>
            <div class="controls">
                <input type="text" class="input-xlarge " id="" value="" name="facility" required/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="proposed_hiring_date">Proposed Hiring Date</label>
            <div class="controls">
                <input type="text" class="input-xlarge" id="appointment_date" value=""  name="proposed_hiring_date" required  placeholder=" "/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="position_status">Position Status*</label>
            <div class="controls">
                <input type="text" class="input-xlarge " id="" value="" name="position_status" required/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="proposed_salary">Proposed Salary*</label>
            <div class="controls">
                <input type="text" class="input-xlarge" value=""  name="proposed_salary" required/>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <button type="reset" class="btn btn-default" id="cancel" name = "cancel" value = "Cancel" >Reset</button>
                <button type="submit" class="btn btn-primary" id="psave">Save</button>
            </div> <!-- /controls -->
        </div> <!-- /control-group -->

    </div>



    </form>
</div>



@stop