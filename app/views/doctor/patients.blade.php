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
					
					<div id="content1" class="widget-content">
					
						<?php	
						$patients = Patient::orderBy('filenumber','DESC')->take(5)->get();
							
						?>
						<table id="patients" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>File Number</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Lab Test</th>
									<th>Prescribe</th>
									<th>operation</th>
								</tr>
							</thead>
							
							<tbody>
						
						@foreach($patients as $patient)
								<tr><td>{{$patient->filenumber}}</td>
									<td>{{$patient->firstname}}</td>
									<td>{{$patient->lastname}}</td>
									<td><span class="label label-success">{{Patients_visit::wherePatient_id($patient->id)->first()->labteststatus}}</span></td>
									<td><span class="label label-important">{{Patients_visit::wherePatient_id($patient->id)->first()->prescriptionstatus}}</span></td>
									

									<td class="action-td" id="{{$patient->id}}">
										<a href="#myModal" role="button" class="btn fetch-patient" data-toggle="modal">Attend</a>
									</td>
								</tr>
						@endforeach
							
								
								
								
								
							</tbody>
						</table>
						

				<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h3 id="myModalLabel">Patient Profile</h3>
							</div>
							<div class="modal-body">
						
							<div id="profile">


							</div>																				

							</div>
							<div class="modal-footer" id="{{$patient->id}}">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								<button class="btn btn-primary" id="nextVisit">Next Visit</button>

								<button class="btn btn-primary">Admit</button>
								<button class="btn btn-primary" id="laboratory">Laboratory</button>
								<button class="btn btn-primary" id="prescribe">Prescribe</button>
							</div>
				</div>
					
					</div> <!-- /widget-content -->
														
					
							
					
				
			</div> <!-- /span9 -->
			
		@stop

