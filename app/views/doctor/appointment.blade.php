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
			$('#appointments_table').dataTable({
				ordering:false,
				"jQueryUI": true,
				"fnDrawCallback": function(oSettings){
					$('.apAccept').on('click', function(){
						var apntId = $(this).parent().attr('id');
						var btn = $(this).parent().parent();
                		$(this).hide().parent().append("<span>Accept? <br /> <a href='#s' id='yes' class='btn btn-success btn-mini'><i class='fa fa-check'></i> Y</a> <a href='#s' id='no' class='btn btn-danger btn-mini'> <i class='fa fa-times'></i> N</a></span>");
						  $("#no").click(function(){
		                    $(this).parent().parent().find(".apAccept").show();
		                    $(this).parent().parent().find("span").remove();
		                });
		                $("#yes").click(function(){
		                    $(this).parent().hide().html("<i class=''></i><span class='btn disabled'><i class='icon-check'></i></span>").fadeIn(1000);
		                    $.post("appointment/accept/"+apntId,function(data){
		                      	
		                   });
		                });
					});
				}

			});
	</script>
@stop


@section('main')
				
				<h1 class="page-title">
					<i class="icon-th-large"></i>
					Appointments					
				</h1>
				
				
				<div class="row">
					
					<div class="span9">
				
						
							<div class="widget-header">
								<h3>My appointments</h3>
							</div> <!-- /widget-header -->
									
							<div class="widget-content">
									<table id="appointments_table" class="table table-striped table-bordered" cellpadding="0" cellspacing="0" border="0">
										<thead>
											<tr>
												
												<th style="text-align: center">First Name</th>
												<th style="text-align: center">Last Name</th>
												<th style="text-align: center">Phone Number</th>
												<th style="text-align: center">Date/Time</th>
												
												<th>Operations</th>
											</tr>
										</thead>
										<tbody>
										<?php   
											$appointments = Appointment::orderBy('accepted','ASC')->get();
										?>
										@foreach($appointments as $appoint)
										<tr>	
											<th style="text-align: center">{{$appoint->first_name}}</th>
											<th style="text-align: center">{{$appoint->last_name}}</th>
											<th style="text-align: center">{{$appoint->phone_number}}</th>
											<th style="text-align: center">{{$appoint->date}}</th>
											@if($appoint->accepted == "no")
											<th class="action-td"  id="{{$appoint->id}}">
													<button  class="btn  apAccept" rel="tooltip"  data-original-title="accept" > <i class="icon-check-empty" role="button"></i> </button>  
											</th>
											@else
											<th class="action-td" id="">
													<button class="btn disabled" rel="tooltip"  data-original-title="accepted" > <i class="icon-check" role="button"></i> </button>  
											</th>
											@endif
										</tr>
										@endforeach
										</tbody>
									</table>									
							</div>

							</div>
						</div>
					


@stop