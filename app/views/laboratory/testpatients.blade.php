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
            $('.table').dataTable({
                ordering:false,
                "jQueryUI": true
            });
    </script>
@stop
@section('main')
    <h1 class="page-title">
                    <i class="icon-th-large"></i>
                    Test Patients                   
                </h1>
                                       
<div class="row">
<div class="span9">
<div class="widget-content">
<div class="tabbable">
<ul class="nav nav-tabs">
    <li class="active">
        <a href="#2" data-toggle="tab">Patients</a>
                         
    </li>
    <li class=""><a href="#1" data-toggle="tab">Tested Patients</a></li>

</ul>


<div class="tab-content">

<div class="tab-pane " id="1">
    <div class="widget-table">

        <div class="widget-header">
        
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
                    <td></td>
                </tr>
                @endforeach

               





                </tbody>
            </table>

        </div>
    </div>
</div>
<div class="tab-pane active " id="2">
    
        
        
                                
            <div class="widget-header">
               
            </div> <!-- /widget-header -->
            












            <div class="widget-content" style="padding:10px;">
                                                    <table id="patients_table" class="table table-striped table-bordered" cellpadding="0" cellspacing="0" border="0">
                                                            <thead>
                                                                <tr>
                                                                    <th style="text-align:center;">#</th>
                                                                    <th style="text-align:center;">First Name</th>
                                                                    <th style="text-align:center;">Last Name</th>
                                                                    <th style="text-align:center;">File Number</th>
                                                                    <th style="text-align: center">Operations</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                        <?php $tests = Laboratory::where('tested','=','FALSE')->orderBy('id', 'DESC')->get(); $id=4;?>
                                                        @foreach($tests as $test)
                                                                <?php
                                                                $pid     = Patients_visit::find($test->pv_id)->patient_id;
                                                                $patient = Patient::find($pid);
                                                                ?>  
                                                                <tr><td style="text-align:center;">{{$id}}<?php $id++; ?></td>
                                                                    <td style="text-align:center;">{{$patient->firstname}}</td>
                                                                    <td style="text-align:center;">{{$patient->lastname}}</td>
                                                                    <td style="text-align:center;">{{$patient->filenumber}}</td>
                                                                    <td style="text-align:center;">
                                                                        
                                                                        <a href="{{url("testpatients/$test->id")}}" 
                                                                           >
                                                                                <i class="icon-edit btn btn-small btn-primary"  rel="tooltip"  data-original-title="take specimen" ></i>
                                                                        </a>
                                                                        <a href="{{url("patient/lab_result/$patient->id")}}" 
                                                                            >
                                                                                <i class="btn btn-small btn-primary icon-edit" rel="tooltip"  data-original-title="enter results"></i>

                                                                        </a>
                                                                        
                                                                    </td>
                                                                    
                                                                    
                                                                </tr>
                                                        @endforeach
                                                            
                                                                
                                                                
                                                                
                                                                
                                                            </tbody>
                                                    </table>
                                        
                                    </div>          
            
  
    </div>

</div>

    

</div>
</div>
</div>
</div>


@stop