@extends('dashboard')
@section('main')
				
				<h1 class="page-title">
					<i class="icon-th-large"></i>
					Prescription					
				</h1>
				
				
				<div class="row">
					
					<div class="span9">
				
						
							<div class="widget-header">
								<h3>Prescription Table</h3>
							</div> <!-- /widget-header -->
									
							<div class="widget-content">
								<div class="tabbable">
									<ul class="nav nav-tabs">
									  <li class="active">
									    <a href="#1" data-toggle="tab">Prescribe</a>
									  </li>
									 
									</ul>

									<div class="tab-content">
										<div class="tab-pane active" id="1">
						

											
											<form  id="presform" action="{{url("patients/prescribe/recommended/{$patient->id}")}}" class="form-horizontal pull-center" method="POST">
												
										@if(Session::has('msg')) 
										  <div class="alert alert-info">{{Session::get('msg')}}</div>
										@endif
												<fieldset>
													<div class="control-group">											
														<label class="control-label" for="username">First name</label>
														<div class="controls">
															{{$patient->firstname}}
															
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													<div class="control-group">											
														<label class="control-label" for="username">Second name</label>
														<div class="controls">

															{{$patient->lastname}}
															
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
										
													<div class="control-group">											
														<label class="control-label" for="username">Prescribed Medicine</label>
														<div class="controls">
														<input type="text" class="input-xlarge" name="prescribedmedicine" id="tokenfield" value="" />
															
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													<div class="control-group">											
														<label class="control-label" for="username">Dosage</label>
														<div class="controls">
															<input type="text" class="input-xlarge" name="quantity" id="tokenfield2" />
															
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													<div class="control-group">											
														<label class="control-label" for="username">Notes</label>
														<div class="controls">
															<textarea rows="3" class="input-xlarge " name="notes"></textarea> 
															<input type="hidden" name="pid" value="{{$patient->id}}" />
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
													<div class="pull-right">
														<button type="button" class="btn">Cancel</button> <input type="submit" id="presc1" class="btn btn-primary" value="Save" />
													</div>			
									
																								
											
												</fieldset>
											</form>
										</div>
										
										<div class="tab-pane" id="2">
											<div class="widget widget-table">
										
												
												
											
										</div>
										
									</div>	
							</div>
						</div>
					</div>
				</div>
	</div>	

@stop