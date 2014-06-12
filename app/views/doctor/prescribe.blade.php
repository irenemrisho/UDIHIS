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
			$('#patients').dataTable({
				ordering:false,
				"jQueryUI": true
			});
	</script>
@stop

@section('main')
				
				<h1 class="page-title">
					<i class="icon-user-md"></i>
					Patients
										
				</h1>
				
				<div class="action-nav-normal">
				   <div class="row">
					
					
					
				</div> <!-- /stat-container -->
				
					
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
						@if(Patients_visit::count() > 0)
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
						@endif	
								
								
								
								
							</tbody>
						</table>
						

				
					
					</div> <!-- /widget-content -->
														
					
							
					
				
			</div> <!-- /span9 -->
			
		@stop

