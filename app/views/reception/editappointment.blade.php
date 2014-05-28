@extends('dashboard')
@section('main')
<h1 class="page-title">
    <i class="icon-th-large"></i>
    Manage Appointments
</h1>
<div class="row">
    <div class="span9">
        <div class="widget-header" style="text-align: center" style="text-align: center">
            <h3 >Edit Apoointments</h3>
        </div> <!-- /widget-header -->
        <div class="widget-content" >
            <div class="contents" style="align-content: center">
                <form id="edit-profile" class="form-horizontal" action="{{URL::to('appointment/edit/' . $appointment->id )}}" method="post" >
                    <fieldset>

                        <div class="control-group" style="align-content: center">

                            <label class="control-label" for="first_name">First name</label>
                            <div class="controls">

                                <input type="text" class="input-xlarge " id="" name="first_name" value={{$appointment->first_name}} >
                            </div> <!-- /controls -->
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="last_name">Last name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge " id="" name="last_name" value={{$appointment->last_name}} >

                            </div> <!-- /controls -->
                        </div> <!-- /control-group -->
                        <div class="control-group">
                            <label class="control-label" for="phone_number">Phone Number</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge " id="" name="phone_number" value={{$appointment->phone_number}} >

                            </div> <!-- /controls -->
                        </div> <!-- /control-group -->
                        <div class="control-group">
                            <label class="control-label" for="birth_date">Appointment Date</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="appointment_date" name="date" required value={{$appointment->date}}>

                            </div> <!-- /controls -->
                        </div> <!-- /control-group -->
                        <div class="control-group">
                            <label class="control-label" for="time">Time</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge " id="appointment_time" name="time" value={{$appointment->time}}>
                            </div> <!-- /controls -->
                        </div> <!-- /control-group -->
                        <div class="control-group">
                            <div class="controls">

                                <button class="btn">Cancel</button>
                                <button type="submit" class="btn btn-primary">Edit</button>

                            </div> <!-- /controls -->
                        </div> <!-- /control-group -->



                    </fieldset>
                </form>

            </div>


        </div>
    </div>
</div>

@stop