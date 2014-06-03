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
			$('#admission_table').dataTable({
				ordering:false,
				"jQueryUI":false
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

													<table id="admission_table" class="table table-striped table-bordered" cellpadding="0" cellspacing="0" border="0">
															<thead>
																<tr>
							

																	<th style="text-align: center">File Number</th>
																	<th style="text-align: center">First Name</th>
																	<th style="text-align: center">Last Name</th>
																	<th style="text-align: center">Admission_Date</th>
																	<th>Operations</th>

																</tr>
															</thead>
															<tbody>

				
																
																
																
																
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


