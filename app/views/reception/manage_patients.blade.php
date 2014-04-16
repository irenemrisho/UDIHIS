
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
											
												 <form id="myWizard" type="get" action="">
											        <section class="step" data-step-title="Personal Information">
											            	
											<fieldset >
											<div class="span4 pull-left">
														<div class="control-group"> 
			                                                    <label class="control-label" for="first_name">Hospital File Number</label>
			                                                        <div class="controls">
			                                                            <input type="text" class="input-xlarge " id="" value="" name="" required />
			                                                            
			                                                        </div> <!-- /controls --> 
	                                                        </div>
	                                                
	                                                     <div class="control-group"> 
			                                                    <label class="control-label" for="first_name">First name</label>
			                                                        <div class="controls">
			                                                            <input type="text" class="input-xlarge " id="" value="" name="first_name" required />
			                                                            
			                                                        </div> <!-- /controls --> 
	                                                        </div>
	                                                    
														<div class="control-group">                                         
	                                                        <label class="control-label" for="last_name">Last name</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" value="" name="last_name" required />
	                                                            
	                                                        </div> <!-- /controls -->               
	                                                    </div> <!-- /control-group -->
	                                                   
	                                                    <div class="control-group">  
	                                                     <label class="control-label" for="gender">Gender</label>
	                                                        <div class="controls">
	                                                            <select class="form-control">
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
			                                                            <input type="text" class="input-xlarge date" id="" value="" name="birth" required />
			                                                            
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
	                                                            <input type="text" class="input-xlarge " id="" name="contact">
	                                                            
	                                                        </div> <!-- /controls -->               
	                                                    </div> <!-- /control-group -->

	                                              
											</div>	
											
										</fieldset>	
										
											        </section>
											        <section class="step" data-step-title="Initial Information">
											            			<fieldset >
											<div class="span4 pull-left">
												
	                                                
	                                                     <div class="control-group"> 
	                                                    <label class="control-label" for="temperature">Temperature</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" value="" name="" required />
	                                                            
	                                                        </div> <!-- /controls --> 
	                                                        </div>
	                                                    <div class="control-group">                                         
	                                                        <label class="control-label" for="bp">Blood Pressure</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" value="" name="" >
	                                                            
	                                                        </div> <!-- /controls -->               
	                                                    </div> <!-- /control-group -->
														<div class="control-group">                                         
	                                                        <label class="control-label" for="">Weight</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" value="" name="" required />
	                                                            
	                                                        </div> <!-- /controls -->               
	                                                    </div> <!-- /control-group -->
	                                                   
	                                                    <div class="control-group">  
	                                                     <label class="control-label" for="password">Allergy</label>
	                                                        <div class="controls">
	                                                            <input type="password" class="input-xlarge" name="password" id="" value="">
	                                                            
	                                                        </div>                                       
	                                              
	                                                    </div> <!-- /control-group -->

	                                                    <div class="control-group">  
	                                                     <label class="control-label" for="gender">Blood Group</label>
	                                                        <div class="controls">
	                                                            <select class="form-control">
	                                                            	<option>A</option>
	                                                            	<option>B</option>
	                                                            	<option>O</option>
	                                                            </select>
	                                                        </div>                                       
	                                              
	                                                    </div> <!-- /control-group -->
	                                                    <div class="control-group">  
	                                                     <label class="control-label" for="gender">Rhesus Factor</label>
	                                                        <div class="controls">
	                                                         
	                                                            
	                                                            
	                                                        </div>                                       
	                                              
	                                                    </div> <!-- /control-group -->


	                                                    
	                                           
											</div>
												
											
										</fieldset>	
											        </section>
											        <section class="step" data-step-title="More Information">
											            			<fieldset >
											<div class="span4 pull-left">
												
	                                                
	                                                     <div class="control-group"> 
	                                                    <label class="control-label" for="first_name">First name</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" value="" name="first_name" required />
	                                                            
	                                                        </div> <!-- /controls --> 
	                                                        </div>
	                                                    <div class="control-group">                                         
	                                                        <label class="control-label" for="middle_name">Middle name</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" value="" name="middle_name" >
	                                                            
	                                                        </div> <!-- /controls -->               
	                                                    </div> <!-- /control-group -->
														<div class="control-group">                                         
	                                                        <label class="control-label" for="last_name">Last name</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" value="" name="last_name" required />
	                                                            
	                                                        </div> <!-- /controls -->               
	                                                    </div> <!-- /control-group -->
	                                                   
	                                                    <div class="control-group">  
	                                                     <label class="control-label" for="password">Password</label>
	                                                        <div class="controls">
	                                                            <input type="password" class="input-xlarge" name="password" id="" value="">
	                                                            
	                                                        </div>                                       
	                                              
	                                                    </div> <!-- /control-group -->
	                                           
											</div>
											<div class="span4 pull-right" style="margin-left:4px;">

													 <div class="control-group">  
	                                                     <label class="control-label" for="username">Email</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge" name="email" id="" value="" required />
	                                                            
	                                                        </div>                                       
	                                              
	                                                    </div> <!-- /control-group -->
												
														<div class="control-group">                                         
	                                                        <label class="control-label" for="address">Address</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" name="address">
	                                                            
	                                                        </div> <!-- /controls -->               
	                                                    </div> <!-- /control-group -->

	                                                     <div class="control-group">                                         
	                                                        <label class="control-label" for="contact">Contact</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" name="contact">
	                                                            
	                                                        </div> <!-- /controls -->               
	                                                    </div> <!-- /control-group -->

	                                              
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
																	<td>{{$patient->first_name}}</td>
																	<td>{{$patient->middle_name}}</td>
																	<td>{{$patient->contact}}</td>
																	<td></td>
																	
																	<td class="action-td">
																		<a href="#myModal" role="button" class="btn" data-toggle="modal">Consult</a>
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

