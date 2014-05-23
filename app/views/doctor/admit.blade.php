@extends('dashboard')
@section('main')
				
				<h1 class="page-title">
					<i class="icon-th-large"></i>
					Admission					
				</h1>
				
				
				<div class="row">
					
					<div class="span9">
				
						
							<div class="widget-header">
								<h3>Admit a Patient</h3>
							</div> <!-- /widget-header -->
									
							<div class="widget-content">
								<div class="tabbable">
									<ul class="nav nav-tabs">
									  <li class="active">
									    <a href="#1" data-toggle="tab">Prescribe</a>
									  </li>
									  <li class=""><a href="#2" data-toggle="tab">Report</a></li>
									</ul>

									<div class="tab-content">
										<div class="tab-pane active" id="1">
						
											<?php $pid = $patient->id?>
											
											<form  id="admitform" action="{{url("patients/admit/$pid")}}" class="form-horizontal pull-center" method="POST">
												
										@if(Session::has('msg')) 
										  <div class="alert alert-info">{{Session::get('msg')}}</div>
										@endif
												<fieldset>
													<div class="control-group">											
														<label class="control-label" for="username">First Name</label>
														<div class="controls">
															{{$patient->firstname}}
															
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													<div class="control-group">											
														<label class="control-label" for="username">Second Name</label>
														<div class="controls">

															{{$patient->lastname}}
															
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
										
													<div class="control-group">											
														<label class="control-label "  for="username">Admission Date</label>
														<div class="controls">
														<input type="text" class="input-xlarge date" value="{{$patient->admit_date}}" name="admit_date" id="" value="" />
															
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
					
													<div class="control-group">											
														<label class="control-label" for="username">Notes</label>
														<div class="controls">
															<textarea rows="3" class="input-xlarge " name="notes" value="{{$patient->admit_notes}}"></textarea> 
															<input type="hidden" name="pid" value="{{$patient->id}}" />
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
													<div class="pull-right">
														<button type="button" class="btn">Cancel</button> <input type="submit" id="admit1" class="btn btn-primary" value="Save" />
													</div>			
									
																								
											
												</fieldset>
											</form>
										</div>
										
										<div class="tab-pane" id="2">
											<div class="widget widget-table">
										
												<div class="widget-header">

													<i class="icon-th-list"></i>
													<h3>Patients report</h3>
												</div> <!-- /widget-header -->
												
												<div class="widget-content">
												
													<table class="table table-striped table-bordered">
														<thead>
															<tr>
																<th>#</th>
																<th>Name</th>
																<th>Disease</th>
																<th>Prescribed medicine</th>
																<th>Date</th>
																<th>&nbsp;</th>
															</tr>
														</thead>
														
														<tbody>
															<tr>
																<td>1</td>
																<td>Joramu Sundu</td>
																<td>Malaria </td>
																<td>Mseto</td>
																<td>Fri 21st Mar 2014</td>
																<td class="action-td">
																	<a href="javascript:;" class="btn btn-small btn-warning">
																		<i class="icon-ok"></i>								
																	</a>					
																	<a href="javascript:;" class="btn btn-small">
																		<i class="icon-remove"></i>						
																	</a>
																</td>
															</tr>
															
																<td>2</td>
																<td>Irene Kimomwe</td>
																<td>Headache </td>
																<td>Paracetamol</td>
																<td>Mon 27th Mar 2014</td>
																<td class="action-td">
																	<a href="javascript:;" class="btn btn-small btn-warning">
																		<i class="icon-ok"></i>								
																	</a>						
																	<a href="javascript:;" class="btn btn-small">
																		<i class="icon-remove"></i>						
																	</a>
																</td>
															</tr>
															
															
														</tbody>
													</table>
												
												</div> <!-- /widget-content -->
												
											
										</div>
										
									</div>	
							</div>
						</div>
					</div>
				</div>
	</div>	

@stop