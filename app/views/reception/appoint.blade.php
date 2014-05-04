@extends('dashboard')
@section('main')
    <h1 class="page-title">
                    <i class="icon-th-large"></i>
                    Appointments                    
                </h1>
                                       
<div class="row">
<div class="span9">
<div class="widget-content">
<div class="tabbable">
<ul class="nav nav-tabs">
    <li class="active">
        <a href="#2" data-toggle="tab">Add Appointment</a>
                         
    </li>
    <li class=""><a href="#1" data-toggle="tab">Doctors Schedule</a></li>

</ul>


<div class="tab-content">

<div class="tab-pane " id="1">
    <div class="widget-table">

        <div class="widget-header">
            <form class="form-search" style="margin-left:4px">
                <input type="text" id="search" class="input-medium search-query" placeholder="Search">
            </form>
        </div> <!-- /widget-header -->

        <div class="widget-content">

            <table id="patients" class="table table-striped table-bordered">
                <thead>
                <tr>
                    
                    <th>Doctor Name</th>
                    <th>Date</th>
                    <th>Number of Patients</th>
                    

                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                <?php $Schedule = Appointment::all(); ?>
                @foreach($Schedule as $Appointment)
                <tr>
                    <td>{{$Appointment->doctor_id}}</td>
                    <td>{{$Appointment->date}}</td>
                    <td>{{$Appointment->patient_id}}</td>
                </tr>
                @endforeach

               





                </tbody>
            </table>

        </div>
    </div>
</div>
<div class="tab-pane active " id="2">
	<div class = "row-fluid">
		<div class ="span6">
          <p>Section</p>
                    <select id="section" name="section" class="form-control">
                        <option></option>
                        <option>OPD</option>
                        <option>IPD</option>
                        <option>ANC</option>
                    </select>

                    <div id="section-more">
                          
                    </div>

<div class="control-group">
<div class="controls">
    <label class="control-label" for="Date">Date</label>
<input type="text" class="input-xlarge" id="appointment_date" value="{{Input::get('Appointment')}}"  name="appointment" required  placeholder=" "/>
        </div>  <!-- /control-->            
    </div> <!-- /control-group -->

        <div class="control-group">
<label class="control-label" for="time">Time</label>
        <div class="controls">
            <input type="text" class="input-xlarge " id="" name="time" placeholder = "">

        </div> <!-- /controls -->
    </div>
		</div>

		<div class="span6">
			
                   
                    <div class="control-group ">
                        <label >Payment type</label>
                        <label class="radio">
                            <input type="radio" name="paymenttype" id="" value="Cash" checked>
                            Cash
                        </label>
                        <label class="radio">
                            <input type="radio" name="paymenttype" id="" value="NHIF">
                            NHIF</label>
                    </div> 

                    <div class="control-group">
            			<input type="submit" class="btn btn-primary " id="" name="appoint" value = "Appoint">
    				</div>
			</div>
      

	</div>
  
    </div>

</div>

    

</div>
</div>
</div>
</div>


@stop