@extends('dashboard')
@section('main')				
				<h1 class="page-title">
					<i class="icon-th-large"></i>
					Manage users					
				</h1>
				
				
				<div class="row">
					
					<div class="span9">
				
						
							<div class="widget-header">
								<h3>Users</h3>
							</div> <!-- /widget-header -->
									
							<div class="widget-content">
								<div class="tabbable">
									<ul class="nav nav-tabs">
									  <li class="active">
									    <a href="#1" data-toggle="tab">Users</a>
									  </li>
									  <li class=""><a href="#2" data-toggle="tab">Add user</a></li>
									</ul>

									<div class="tab-content" style="height: 400px">
										<div class="tab-pane " id="2" style="position:absolute">
										<form id="edit-profile" class="form-horizontal4" action="manage_user" method="post">	
											<fieldset >
											<div class="span4 pull-left">
												
	                                                
	                                                     <div class="control-group"> 
	                                                    <label class="control-label" for="first_name">First name</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" value="" name="first_name" >
	                                                            
	                                                        </div> <!-- /controls --> 
	                                                        </div>
	                                                    <div class="control-group">                                         
	                                                        <label class="control-label" for="middle_name">Middle name</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" value="" name="middle_name">
	                                                            
	                                                        </div> <!-- /controls -->               
	                                                    </div> <!-- /control-group -->
														<div class="control-group">                                         
	                                                        <label class="control-label" for="last_name">Last name</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge " id="" value="" name="last_name">
	                                                            
	                                                        </div> <!-- /controls -->               
	                                                    </div> <!-- /control-group -->
	                                                   
	                                                    <div class="control-group">  
	                                                     <label class="control-label" for="password">Password</label>
	                                                        <div class="controls">
	                                                            <input type="password" class="input-xlarge" name="password" id="" value="">
	                                                            
	                                                        </div>                                       
	                                              
	                                                    </div> <!-- /control-group -->
	                                           
											</div>
											<div class="span5 pull-right">

													 <div class="control-group">  
	                                                     <label class="control-label" for="username">Email</label>
	                                                        <div class="controls">
	                                                            <input type="text" class="input-xlarge" name="email" id="" value="">
	                                                            
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

	                                                    <div class="control-group">                                         
	                                                        <label class="control-label" for="username">Designation</label>
	                                                        <div class="controls">
	                                                        	{{Form::select('level',array('1'=>'Pharmacist','2'=>'Lab Technician','3'=>'Receptionist','4'=>'Doctor','5'=>'Accountant'))}}
	                        	
	                                                        </div>
	                                                                     
	                                                    </div> <!-- /control-group -->
	                                                    
	                                                    <div class="pull-left">
	                                                        <button class="btn">Cancel</button> <button type="submit" class="btn btn-primary">Add</button>
	                                                    </div>
											</div>	
										</fieldset>	
										</form>

										<div>

										</div>

										</div>
										
										<div class="tab-pane active" id="1">
											<div class="widget widget-table">
										
												<div class="widget-header">

													<i class="icon-th-list"></i>
													<h3>Patients report</h3>
												</div> <!-- /widget-header -->
												
												<div class="widget-content">
												
													<table class="table table-striped table-bordered">
													   <?php	$users = User::where('level', '!=', 0)->get();					
															?>
														
														<thead>
															<tr>
																<th>#</th>
																<th>First Name</th>
																<th>Last Name</th>
																<th>Designation</th>
																<th>Date</th>
																<th>operation</th>
															</tr>
														</thead>
														
														<tbody>
														@foreach($users as $user)
															<tr>
																<td>{{$user->id}}</td>
																<td>{{$user->first_name}}</td>
																<td>{{$user->last_name}} </td>
																<td>{{User::level($user->level)}}</td>
																<td>{{$user->created_at->format('j F, Y')}}</td>
																<td class="action-td" id="{{$user->id}}">
																	<a href="#myModal" class="btn btn-small btn-primary fetchuser"  data-toggle="modal">
																		<i class="icon-pencil"></i>								
																	</a>					
																	<a href="javascript:;" class="btn btn-small btn-danger deleteuser">
																		<i class="icon-trash"></i>								
																	</a>

																</td>
															</tr>
															@endforeach
															
			
															
															
														</tbody>
													</table>

																	<!-- Modal -->
																	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
																	<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																	<h3 id="myModalLabel">Edit User information</h3>
																	</div>
																	<div class="modal-body">
																	  <img src="{{url("packages/bootstrap/img/loader.gif")}}" id="ajax" style="display:none2;z-index:3000;position:absolute;margin-left: 230px; margin-top:100px">
															          <div id="alrt" class="alert alert-success alert-dismissable" style="display:none;z-index:3000;position:absolute;margin-left: 160px; margin-top:100px">
															            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
															            <strong>Successfully updated! Redirecting...</strong> 
															          </div>
																		<div id="user_content">

																		</div>	
																	</div>
																	<div class="modal-footer">
																	<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
																	<button class="btn btn-primary" id="save">Save changes</button>
																	</div>
																	</div>

												
												</div> <!-- /widget-content -->
												
											
										</div>
										
									</div>	
							</div>
						</div>
					</div>
				</div>
	</div>	

@stop