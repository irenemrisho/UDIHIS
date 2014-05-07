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
			$('#patients_table').dataTable({
				ordering:false,
				"jQueryUI": true
			});
	</script>
@stop

@section('main')

				<h1 class="page-title">
					<i class="icon-th-large"></i>
					Manage Patients					
				</h1>
				<div class="row">
					<div class="span9">
							<div class="widget-content">
								
								
											<div class=" widget widget-table">
										 @if(isset($message))
<div class="alert alert-info" id="message">{{ $message }}</div>
@endif	
												<div class="widget-content" style="padding:10px;">
													<table id="patients_table" class="table table-striped table-bordered" cellpadding="0" cellspacing="0" border="0">
															<thead>
																<tr>
							

																	<th style="text-align: center">File Number</th>
																	<th style="text-align: center">First Name</th>
																	<th style="text-align: center">Last Name</th>
																	<th style="text-align: center">Tested</th>
																	<th style="text-align: center">Prescribed</th>
																	<th>Operations</th>

																</tr>
															</thead>
															<tbody>
														<?php $patients = Patient::orderBy('filenumber', 'DESC')->get(); $id=1;?>
														@foreach($patients as $patient)
																<tr>

										        					<td style="text-align:center;">{{$patient->filenumber}}</td>
																	<td style="text-align:center;">{{$patient->firstname}}</td>
																	<td style="text-align:center;">{{$patient->lastname}}</td>
																	<td style="text-align:center;"><span class="label label-success">{{Patients_visit::wherePatient_id($patient->id)->first()->labteststatus}}</span></td>
																	<td style="text-align:center;"><span class="label label-important">{{Patients_visit::wherePatient_id($patient->id)->first()->prescriptionstatus}}</span></td>
									

																	<td class="action-td" id="{{$patient->id}}">
																				<a href="#myModal" class="btn fetch-patient" data-toggle="modal" 
										                                	rel="tooltip" data-placement="top" data-original-title="delete" class="btn btn-small btn-success">
										                                		<i class="icon-hospital" role="button"></i>
										                                </a>
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
					
										
									</div>	

							</div>
						</div>
					</div>
				</div>
	</div>	


@stop

