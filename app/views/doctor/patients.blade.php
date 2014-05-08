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
													<div id="loadpatientinfo">

													</div>
													<p id="loader" style="display:none">{{HTML::image('packages/bootstrap/img/loader.gif','',array('class'=>'thumbnail2','style'=>'position:absolute;top:130px;z-index: 30000; left: 380px; height:y26px'))}}</p>
													<div id="table-content">

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
																		<button class="btn fetchPatient" rel="tooltip"  data-original-title="attend" > <i class="icon-hospital" role="button"></i> </button>  
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


