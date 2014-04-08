@extends('dashboard')
@section('main')
				
				<h1 class="page-title">
					<i class="icon-user-md"></i>
					Patients
					<div class="pull-right">
					<input type="search" class="form-control" placeholder="search patients" style="text-align:center; padding-top:4px">

					</div>
										
				</h1>
				
				<div class="action-nav-normal">
				   <div class="row">
					
					
					
				</div> <!-- /stat-container -->
										
					<div class="widget-header">
						<i class="icon-th-list"></i>
						<h3>Manage patients records</h3>
					</div> <!-- /widget-header -->
					
					<div id="content1" class="widget-content">
					
						<table id="patients" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Prescribed drugs</th>
									
									<th>&nbsp;</th>
								</tr>
							</thead>
							
							<tbody>
						<?php	$patients = Patient::all();
							
						?>
						@foreach($patients as $patient)
								<tr><td>{{$patient->id}}</td>
									<td>{{$patient->first_name}}</td>
									<td>{{$patient->last_name}}</td>
									<td>{{$patient->contact}}</td>
									<td></td>
									
									<td class="action-td">
										<div class="btn-group">
										    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
										      Option
										      <span class="caret"></span>
										    </button>
										    <ul class="dropdown-menu">
										      <li><a href="#">Setting</a></li>
										      <li><a href="#">History</a></li>
										    </ul>
									  </div>
									</td>
								</tr>
								@endforeach
							
								
								
								
								
							</tbody>
						</table>
					
					</div> <!-- /widget-content -->
														
					
							
					
				
			</div> <!-- /span9 -->
<script type="text/javascript">
    $(document).ready(function(){
        
            $('#patients').dataTable();
          
    });
    </script>
		@stop

