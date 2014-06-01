@extends('dashboard')

@section('page_specific_css')
    <!-- datatable includes -->
    {{HTML::style('packages/datatables/media/css/jquery.dataTables.css')}}
    {{HTML::style('packages/datatables/media/css/jquery.dataTables_themeroller.css')}}
@stop

@section('page_specific_scripts')
    <!-- Datatable includes -->
    {{HTML::script('packages/datatables/media/js/jquery.dataTables.js')}}
    <script type="text/javascript">
            $('#appointment_table').dataTable({
                ordering:false,
                info:true
            });
    </script>
@stop

@section('main')
<h1 class="page-title">
<i class="icon-th-large"></i>
Manage Appointment                   
</h1>


<div class="row">

<div class="span9">


<div class="widget-header">
<h3>Appointments</h3>
</div> <!-- /widget-header -->

<div class="widget-content">
<div class="tabbable">
<ul class="nav nav-tabs">
<li class="active">
<a href="#1" data-toggle="tab">Appointments</a>
</li>
<li class=""><a href="#2" data-toggle="tab">Add Appointment</a></li>
</ul>

<div class="tab-content" style="height: 600px">
<div class="tab-pane " id="2" style="position:absolute">
<form id="edit-profile" class="form-horizontal4" action="{{url("appoitment/add")}}" method="post">
   <div class="contents">
       <fieldset >
           <div class="span4 pull-left">

               <div class="control-group">
                   <div class="controls">
                       <label class="control-label" for="first_name">First Name</label>
                       <input type="text" class="input-xlarge " id="" value="" name="first_name" required />

                   </div> <!-- /controls -->
               </div>
               <div class="control-group">
                   <div class="controls">
                       <label class="control-label" for="last_name">Last Name</label>
                       <input type="text" class="input-xlarge " id="" value="" name="last_name" required />

                   </div> <!-- /controls -->
                </div>
                   <div class="control-group">
                       <div class="controls">
                           <label class="control-label" for="phone_number">Phone Number</label>
                           <input type="text" class="input-xlarge " id="" value=""  name="phone_number" required />

                       </div> <!-- /controls -->
                   </div>
                       </div>
           <div class="span4 pull-right">
                   <div class="control-group ">
                       <p>SPECIALIST</p>
                       <select id="section" name="specialist" class="form-control">
                           <option disabled>Select Position</option>
                           <?php
                           $docts = User::where('level',4)->get();
                           ?>
                           @foreach($docts as $dr)
                           <option></option>
                           <option value="{{$dr->id}}">{{$dr->first_name}} {{$dr->last_name}}</option>
                           @endforeach
                       </select>
                   </div>

                   <div class="control-group">
                       <label class="control-label" for="Date">Date</label>
                       <div class="controls">
                           <input type="text" class="input-xlarge" id="appointment_date" value=""  name="date" required  placeholder=" "/>
                       </div>  <!-- /control-->
                   </div> <!-- /control-group -->

                   <div class="control-group">
                       <label class="control-label" for="time">Time</label>
                       <div class="controls">
                           <input type="text" class="input-xlarge " id="appointment_time" name="time" placeholder = "">

                       </div> <!-- /controls -->

                   </div>
               </div>
       </fieldset>
       <center>
           <div class="control-group" >
               <div class="controls">
                   <button type="reset" class="btn btn-danger" id="cancel" name = "cancel" value = "Cancel" >Reset</button>
                   <button type="submit" class="btn btn-primary">Add</button>
               </div>
           </div>
       </center>

   </div>
</form>

</div>

<div class="tab-pane active" id="1">
<div class="widget widget-table">

    
    
    <div class="widget-content" style="padding:10px">
    
        <table class="table table-striped table-bordered" id="appointment_table">
            
            <thead>
                <tr>
                    
                                        <th style="text-align:center;">#</th>
                                        <th style="text-align:center;">First Name</th>
                                        <th style="text-align:center;">Last Name</th>
                                        <th style="text-align:center;">Phone Number</th>
                                        <th style="text-align:center;">Date/Time</th>
                                        <th style="text-align: center">Specialist</th
                </tr>
            </thead>
            
            <tbody>
            <?php
            $appointment = Appointment::orderBy('id','DESC')->get();
              $aid=1;?>
            @foreach($appointment as $appointment)
                <tr>
                    <td>{{$aid}}<?php $aid++;?></td>
                    <td>{{$appointment->first_name}}</td>
                    <td>{{$appointment->last_name}} </td>
                    <td>{{$appointment->phone_number}}</td>
                    <td>{{$appointment->date}}/{{$appointment->time}}</td>

                    <td class="action-td" id="{{$appointment->id}}">
                        <a  href="{{url("appointment/edit/$appointment->id")}}"
                        rel="tooltip" class="btn btn-small fetchuser" data-original-title="edit"  data-toggle="modal">
                        <i class="icon-edit" ></i>
                        </a>
                        <a href="{{url("appointment/delete/$appointment->id")}}" onclick="return confirm('delete')"
                        rel="tooltip" data-placement="top" data-original-title="delete" class="btn btn-small btn-danger">
                        <i class="icon-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
                

                
                
            </tbody>
        </table>

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">Edit Appointment Information</h3>
</div>
<div class="modal-body">
  <img src="{{url("packages/bootstrap/img/loader.gif")}}" id="ajax" style="display:none2;z-index:3000;position:absolute;margin-left: 230px; margin-top:100px">
  <span id="ajax2"><img src="{{url("packages/bootstrap/img/load.gif")}}"   style=""></span>
  <div id="alrt" class="alert alert-success alert-dismissable" style="display:none;z-index:3000;position:absolute;margin-left: 160px; margin-top:100px">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Successfully updated! Redirecting...</strong> 
  </div>
    <div id="user_content">

    </div>  
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button class="btn btn-primary" id="save">Save changes</button>
</div>
</div>

    
    </div> <!-- /widget-content -->
    

</div>

</div>  
</div>
</div>
</div>
</div>
</div>  


@stop