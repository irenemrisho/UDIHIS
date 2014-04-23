@extends('dashboard')
@section('main')	

				<h1 class="page-title">
					<i class="icon-th-large"></i>
					Manage Patients					
				</h1>
				<div class="row">
					<div class="span9">
							<div class="widget-content">
								
								<div class="tabbable">
									<ul class="nav nav-tabs">
									  <li class="active">
									    <a href="#2" data-toggle="tab">Register Patient</a>
									  </li>
									  <li class=""><a href="#1" data-toggle="tab">Search Patient</a></li>
								
									</ul>




										<div class="tab-content">
											<div class="tab-pane active " id="2">
										


									          <div id="alrt" class="alert alert-success alert-dismissable" style="display:none;z-index:3000;position:absolute;margin-left: 160px; margin-top:150px">
									            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									            <strong>Successfully updated! Redirecting...</strong> 
									          </div>

									          @if(isset($message))
												<div class="alert alert-info" id="message">{{ $message }}</div>
											@endif

												 <form id="myWizard" type="get" action="">

											        <section style="display:none" class="step" data-step-title="Initial Information">
											            			<fieldset >
											          				
											<div class="span4 pull-left">
												
	                                                
	                                                    <h4 >Full name :  {{Patient::fullname($newpatient)}} </h4>
														<div class="control-group">                                         
	                                                        <label class="control-label" for="">Height</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" value="" name="height"  />
	                                                            
	                                                        </div> <!-- /controls -->               
	                                                    </div> <!-- /control-group -->
														<div class="control-group">                                         
	                                                        <label class="control-label" for="">Weight</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" value="" name="weight"  />
	                                                            
	                                                        </div> <!-- /controls -->               
	                                                    </div> <!-- /control-group -->
	                                                   
	                                                    <div class="control-group">  
	                                                     <label class="control-label" for="password">Allergy</label>
	                                                        <div class="controls">
				                                               	<select class="form-control" name="allergy">
				                                               		<option></option>
				                                               		<option>Skin</option>
				                                               		<option>None</option>	
	                                                        	</select>
	                                                        </div>                                       
	                                              
	                                                    </div> <!-- /control-group -->

	                                                    
	                                           
											</div>

											<div class="span4 pull-right">
<h4> Hospital File no: <b>{{$newpatient->filenumber}}</b></h4>  
													                                                     <div class="control-group"> 
	                                                    <label class="control-label" for="temperature">Temperature</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" value="" name="temperature" />
	                                                            
	                                                        </div> <!-- /controls --> 
	                                                        </div>
	                                                    <div class="control-group">                                         
	                                                        <label class="control-label" for="bp">Blood Pressure</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" value="" name="bloodpressure" >
	                                                            
	                                                        </div> <!-- /controls -->               
	                                                    </div> <!-- /control-group -->

	                                                    <div class="control-group">  
	                                                     <label class="control-label" for="gender">Blood Group</label>
	                                                        <div class="controls">
	                                                            <select class="form-control" name="bloodgroup">
	                                                            	<option></option>
	                                                            	<option>A</option>
	                                                            	<option>B</option>
	                                                            	<option>O</option>
	                                                            </select>
	                                                        </div>                                       
	                                              
	                                                    </div> <!-- /control-group -->
	                                                    <div class="control-group">  
	                                                     <label class="control-label" for="gender">Rhesus Factor</label>
	                                                        <div class="control-group ">
	                                                        <label class="radio">
																<input type="radio" name="rhesus" id="" value="positive" >
																Positive
																</label>
																<label class="radio">
																<input type="radio" name="rhesus" id="" value="negative">
																Negative</label>
	                                                            
	                                                        </div>                                       
	                                              
	                                                    </div> <!-- /control-group -->
											</div>
												
											
										</fieldset>	
											        </section>


											        
											        <section style="display:none" class="step" id="last" data-step-title="More Information">
											
											
									                 	

											<fieldset >
											<div class="span4 pull-left">
	                                                    <h4 >Full name :  {{Patient::fullname($newpatient)}} </h4>
												
	                                                   <div class="control-group ">
	                                                   <h4>Payment Type</h4>
	                                                        <label class="radio">
																<input type="radio" name="paymenttype" id="" value="Cash" checked>
																Cash
																</label>
																<label class="radio">
																<input type="radio" name="paymenttype" id="" value="NHIF">
																NHIF</label>
	                                                            
	                                                      </div> 
	                                                      
	                                                   
	                                                 
	                                           
											</div>
											<div class="span4 pull-right" style="margin-left:4px;">

												
	       <h4> Hospital File no: <b>{{$newpatient->filenumber}}</b></h4>  
	       <input name="pid" value="{{$newpatient->id}}" type="hidden" />                                            
	                                                  <label class="control-label">Direct To &raquo</label>
	                                                  <p>SECTION</p>
	                                                  <select id="section" name="section" class="form-control">  
	                                                    <option></option>
	                                                  	<option>OPD</option>
	                                                  	<option>IPD</option>	                      
	                                                  	<option>ANC</option>
	                                                  </select>

	                                                  <div id="section-more">
														
	                                                  </div>	
	                                              
											</div>	
											
										</fieldset>	
											        </section>
    											</form>

											<div>
										</div>

										</div>
										
										<div class="tab-pane " id="1">
											<div class="widget-table">
										
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
																	
																	<th>&nbsp;</th>
																</tr>
															</thead>
															
															<tbody>
														<?php $patients = Patient::all(); ?>
														@foreach($patients as $patient)
																<tr><td>{{$patient->id}}</td>
																	<td>{{$patient->firstname}}</td>
																	<td>{{$patient->lastname}}</td>
																	<td>{{$patient->phone}}</td>
																	<td></td>
																	
																	
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

