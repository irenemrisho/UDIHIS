@extends('dashboard')
@section('main')
	
				<?php 
				$individual= User::find(Auth::user()->id); 

				//$individual=Individual::account()->find($account->id); 
				?>
				<h1 class="page-title"
					<i class="icon-th-large"></i>
					User Account					
				</h1>
				
				
				<div class="row">					
					<div class="span9">																	
							<div class="widget-header">
								<h3>Basic Information </h3>
							</div> <!-- /widget-header -->
							<div class="widget-content">
								<div class="tabbable">
									<ul class="nav nav-tabs">
									  <li class="active">
									    <a href="#1" data-toggle="tab">Profile</a>
									  </li>
									  
					
									</ul>

									<div class="tab-content">
										<div class="tab-pane active" id="1">
											<form id="edit-profile" class="form-horizontal">
												<fieldset>
													<div class="control-group">											
														<label class="control-label" for="username">Username</label>
														<div class="controls">
															<input type="text" class="input-xlarge disabled" id="username" value="{{ Auth::user()->email }}" disabled>
														
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
													
													<div class="control-group">											
														<label class="control-label" for="firstname">First Name</label>
														<div class="controls">
															<input type="text" class="input-xlarge" id="firstname" value="{{ $individual->first_name }}">
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
													<div class="control-group">											
														<label class="control-label" for="lastname">Last Name</label>
														<div class="controls">
															<input type="text" class="input-xlarge" id="lastname" value="{{ $individual->last_name }}">
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
													<div class="control-group">											
														<label class="control-label" for="password1">Password</label>
														<div class="controls">
															<input type="password" class="input-xlarge" id="password1" value="password">
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													<div class="control-group">											
														<label class="control-label" for="password2">Confirm</label>
														<div class="controls">
															<input type="password" class="input-xlarge" id="password2" value="password">
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
												</fieldset>
											</form>
										</div>
										
						
													
													<div class="form-actions">
														<button type="submit" class="btn btn-primary">Request</button> <button class="btn">Cancel</button>
													</div>
												</fieldset>
											</form>
										</div>
										
									</div>
						</div>

@stop