
@section('main')				
				<h1 class="page-title">
					<i class="icon-th-large"></i>
					Manage Patients					
				</h1>
				<div class="row">
					<div class="span9">
							<div class="widget-content">
								@if(Session::has('message'))
								<div class="alert alert-info" id="message">{{ Session::get('message') }}</div>
								@endif
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

												 <form id="myWizard" type="get" action="">
											        <section class="step" data-step-title="Personal Information">
											            	
											<fieldset >
											<div class="span4 pull-left">
														<div class="control-group"> 
			                                                    <label class="control-label" for="first_name">Hospital File Number</label>
			                                                        <div class="controls">
			                                                            <input type="text" class="input-xlarge " id="" value="" name="filenumber"/>
			                                                            
			                                                        </div> <!-- /controls --> 
	                                                        </div>
	                                                
	                                                     <div class="control-group"> 
			                                                    <label class="control-label" for="first_name">First name</label>
			                                                        <div class="controls">
			                                                            <input type="text" class="input-xlarge " id="" value="" name="firstname"  />
			                                                            
			                                                        </div> <!-- /controls --> 
	                                                        </div>
	                                                    
														<div class="control-group">                                         
	                                                        <label class="control-label" for="last_name">Last name</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" value="" name="lastname"  />
	                                                            
	                                                        </div> <!-- /controls -->               
	                                                    </div> <!-- /control-group -->
	                                                   
	                                                    <div class="control-group">  
	                                                     <label class="control-label" for="gender">Gender</label>
	                                                        <div class="controls">
	                                                            <select class="form-control" name="gender">
	                                                            	<option>Male</option>
	                                                            	<option>Female</option>
	                                                            </select>
	                                                        </div>                                       
	                                              
	                                                    </div> <!-- /control-group -->
	                                                   
	                                           
											</div>
											<div class="span4 pull-right" style="margin-left:4px;">
												 <div class="control-group"> 
			                                                    <label class="control-label" for="first_name">Date of birth</label>
			                                                        <div class="controls">
			                                                            <input type="text" class="input-xlarge date" id="" value="" name="birth" />
			                                                            
			                                                        </div> <!-- /controls --> 
	                                                        </div>
														<div class="control-group">                                         
	                                                        <label class="control-label" for="address">Address</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" name="address">
	                                                            
	                                                        </div> <!-- /controls -->               
	                                                    </div> <!-- /control-group -->

	                                                     <div class="control-group">                                         
	                                                        <label class="control-label" for="contact">Phone number</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" name="phone">
	                                                            
	                                                        </div> <!-- /controls -->               
	                                                    </div> <!-- /control-group -->

	                                              
											</div>	
											
										</fieldset>	
										
											        </section>
											        <section style="display:none" class="step" data-step-title="Initial Information">
											            			<fieldset >
											<div class="span4 pull-left">
												
	                                                
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
	                                                        <label class="control-label" for="">Weight</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" value="" name="weight"  />
	                                                            
	                                                        </div> <!-- /controls -->               
	                                                    </div> <!-- /control-group -->
	                                                   
	                                                    <div class="control-group">  
	                                                     <label class="control-label" for="password">Allergy</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge" name="allergy" id="" value="allergy">
	                                                            
	                                                        </div>                                       
	                                              
	                                                    </div> <!-- /control-group -->

	                                                    
	                                           
											</div>

											<div class="span4 pull-right">

	                                                    <div class="control-group">  
	                                                     <label class="control-label" for="gender">Blood Group</label>
	                                                        <div class="controls">
	                                                            <select class="form-control" name="bloodgroup">
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
																<input type="radio" name="rhesus" id="" value="positive" checked>
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
	                                                      <h4>Next To Keen Information </h4>
	                                                <div class="control-group">                                         
	                                                        <label class="control-label" for="">Full Name</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" value="" name="fullname"  />
	                                                            
	                                                        </div> <!-- /controls -->               
	                                                  </div> <!-- /control-group -->
	                                                   <div class="control-group">                                         
	                                                        <label class="control-label" for="">Phone Number</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" value="" name="phone2"  />
	                                                            
	                                                        </div> <!-- /controls -->               
	                                                  </div> <!-- /control-group -->
	                                                   
	                                                 
	                                           
											</div>
											<div class="span4 pull-right" style="margin-left:4px;">

												
	                                                   
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

