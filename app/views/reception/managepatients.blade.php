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
														    <form class="form-search" id="data1" style="margin-left:4px">
															    <input type="text" id="search" class="input-medium search-query" placeholder="Search">
															</form> 
												</div> <!-- /widget-header -->
												
												<div class="widget-content">

												
													<table id="patients" class="table table-striped table-bordered" cellpadding="0" cellspacing="0" border="0">
															<thead>
																<tr>
																	<th>ID</th>
																	<th>First Name</th>
																	<th>Last Name</th>
																	<th>Phone Number</th>
																	<th style="text-align: center">Operations</th>
																	
																</tr>
															</thead>
															
															<tbody>
														<?php $patients = Patient::all(); ?>
														@foreach($patients as $patient)
																<tr><td>{{$patient->id}}</td>
																	<td>{{$patient->firstname}}</td>
																	<td>{{$patient->lastname}}</td>

																	<td>{{$patient->phone_no}}</td>
																	
																    <td align="center">
																    	<a href="{{url("patient/edit/$patient->id")}}" class="btn btn-small fetchuser"  data-toggle="modal">
																		<i class="icon-wrench"></i>								
																		</a>
										                            	<a href="{{url("patient/appoint/$patient->id")}}" 
										                                	rel="tooltip" data-placement="top" data-original-title="edit" class="btn btn-small btn-primary">
										                                		<i class="icon-edit"></i>
										                                </a>
										                            	<a href="{{url("patient/visit/$patient->id")}}" 
										                                	rel="tooltip" data-placement="top" data-original-title="delete" class="btn btn-small btn-success">
										                                		<i class="icon-exchange"></i>
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

