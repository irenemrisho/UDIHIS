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

									<div class="tab-content">
										<div class="tab-pane " id="2">
						

											<form id="edit-profile" class="form-horizontal" action="manage_user" method="post">
                                                <fieldset>
                                                    <div class="control-group">  
                                                     <label class="control-label" for="username">Email</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="email" id="" value="">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">  
                                                     <label class="control-label" for="password">Password</label>
                                                        <div class="controls">
                                                            <input type="password" class="input-xlarge" name="password" id="" value="">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
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
                                                    
                                                    <div class="pull-right">
                                                        <button class="btn">Cancel</button> <button type="submit" class="btn btn-primary">Add</button>
                                                    </div>
                                                </fieldset>
                                            </form>
										</div>
										
										<div class="tab-pane active" id="1">
											<div class="widget widget-table">
										
												<div class="widget-header">

													<i class="icon-th-list"></i>
													<h3>Patients report</h3>
												</div> <!-- /widget-header -->
												
												<div class="widget-content">
												
													<table class="table table-striped table-bordered">
													  <?php	$users = User::all();					
															?>
														
														<thead>
															<tr>
																<th>#</th>
																<th>First Name</th>
																<th>Last Name</th>
																<th>Designation</th>
																<th>Date</th>
																<th>&nbsp;</th>
															</tr>
														</thead>
														
														<tbody>
														@foreach($users as $user)
															<tr>
																<td>{{$user->id}}</td>
																<td>{{$user->first_name}}</td>
																<td>{{$user->last_name}} </td>
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
															@endforeach
															
			
															
															
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