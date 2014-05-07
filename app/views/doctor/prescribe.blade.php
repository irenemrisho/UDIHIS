@extends('dashboard')
@section('main')
				
				<h1 class="page-title">
					<i class="icon-user-md"></i>
					Patients
										
				</h1>
				
				<div class="action-nav-normal">
				   <div class="row">
					
					
					
				</div> <!-- /stat-container -->
										
					<div class="widget-header">
						
				    <input type="text" style="margin-left:8px" id="searchPatient" class="input-medium search-query" placeholder="Search">
					</div> <!-- /widget-header -->
					
					<div id="content1" class=" widget widget-content">
					
						<?php	
						$patients = Patient::orderBy('filenumber','DESC')->take(5)->get();
							
						?>
						<table id="patients" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>File Number</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Prescribed</th>
									<th>operation</th>
								</tr>
							</thead>
							
							<tbody>
						
						@foreach($patients as $patient)
								<tr><td>{{$patient->filenumber}}</td>
									<td>{{$patient->firstname}}</td>
									<td>{{$patient->lastname}}</td>
						
									<td><span class="label label-important">{{Patients_visit::wherePatient_id($patient->id)->first()->prescriptionstatus}}</span></td>
	

									<td class="action-td" id="{{$patient->id}}">
									<input id="pid" type="hidden" value="{{$patient->id}}"/>
										<button id="prescribe1" class="btn btn-default" >Prescribe</button>
									</td>
								</tr>
						@endforeach
							
								
								
								
								
							</tbody>
						</table>
						

				
					
					</div> <!-- /widget-content -->
														
					
							
					
				
			</div> <!-- /span9 -->
			
		@stop

