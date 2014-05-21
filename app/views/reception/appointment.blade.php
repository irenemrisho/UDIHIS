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

<div class="tab-content" style="height: 400px">
<div class="tab-pane " id="2" style="position:absolute">
<form id="edit-profile" class="form-horizontal4" action="manage_appointment" method="post">    
<fieldset >
<div class="span4 pull-left">

             <div class="control-group"> 
            <label class="control-label" for="first_name">Client's name</label>
                <div class="controls">
                    <input type="text" class="input-xlarge " id="" value="" name="client's_name" required />
                    
                </div> <!-- /controls --> 
                
                    <div class="control-group ">
                                                         
              <p>Select a doctor</p>
                    <select id="section" name="section" class="form-control">
                        <option></option>
                        <option>OPD</option>
                        <option>IPD</option>
                        <option>ANC</option>
                    </select>

                     <div id="section-more">

                    </div>

                    </div>
        
<div class="control-group">
    <label class="control-label" for="Date">Date</label>
    <div class="controls">
<input type="text" class="input-xlarge" id="appointment_date" value="{{Input::get('Appointment')}}"  name="appointment" required  placeholder=" "/>
        </div>  <!-- /control-->            
    </div> <!-- /control-group -->

        <div class="control-group">
<label class="control-label" for="time">Time</label>
        <div class="controls">
            <input type="text" class="input-xlarge " id="appointment_time" name="time" placeholder = "">

        </div> <!-- /controls -->
   
</div>
        
         
            
            <div class="pull-left">
                <button class="btn">Cancel</button> <button type="submit" class="btn btn-primary">Add</button></div>
            </div> 

            </div>  

</fieldset> 
</form>

<div>

</div>

</div>

<div class="tab-pane active" id="1">
<div class="widget widget-table">

    
    
    <div class="widget-content" style="padding:10px">
    
        <table class="table table-striped table-bordered" id="appointment_table">
           <?php    $users = User::where('level', '!=', 0)->get();                  
                ?>
            
            <thead>
                <tr>
                    
                                        <th style="text-align:center;">#</th>
                                        <th style="text-align:center;">Client's Name</th>
                                        <th style="text-align:center;">Appointment Date</th>
                                        <th style="text-align:center;">Phone Number</th>
                                        <th style="text-align: center">Doctor</th>
                                                      </tr>
            </thead>
            
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->last_name}} </td>
                    <td>{{User::level($user->level)}}</td>
                    <td>{{User::ago($user->updated_at)}}</td>
                    <td class="action-td" id="{{$user->id}}">
                        <a href="#myModal" class="btn btn-small btn-primary fetchuser"  data-toggle="modal">
                            <i class="icon-pencil"></i>                             
                        </a>                    
                        <a href="javascript:;" class="btn btn-small btn-danger deleteuser">
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