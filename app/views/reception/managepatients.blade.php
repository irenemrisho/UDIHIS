@extends('dashboard')
@section('main')	

				<h1 class="page-title">
					<i class="icon-th-large"></i>
					Manage Patients					
				</h1>
				<div class="row">
					<div class="span9">
							<div class="widget-content">
								
								
											<div class="widget-table">
										 @if(isset($message))
<div class="alert alert-info" id="message">{{ $message }}</div>
@endif	
												<div class="widget-header">
														    <form class="form-search" style="margin-left:4px">
															    <input type="text" id="search" class="input-medium search-query" placeholder="Search">
															</form> 
												</div> <!-- /widget-header -->
												
												<div class="widget-content">

												
													<table id="patients" class="table table-striped table-bordered">
															<thead>
																<tr>
																	<th>ID</th>
																	<th>First Name</th>
																	<th>Last Name</th>
																	<th>Contact</th>
																	<th>Operations</th>
																	
																</tr>
															</thead>
															
															<tbody>
														<?php $patients = Patient::paginate(6); ?>
														@foreach($patients as $patient)
																<tr><td>{{$patient->id}}</td>
																	<td>{{$patient->firstname}}</td>
																	<td>{{$patient->lastname}}</td>
																	<td>{{$patient->phone}}</td>
																	<td class="action-td" id="">
																	<a href="{{url("patient/edit/$patient->id")}}" class="btn btn-small btn-primary fetchuser"  data-toggle="modal">
																		<i class="icon-pencil"></i>								
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


@stop

