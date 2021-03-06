@extends('dashboard')
@section('main')
	
<?php 
$individual= User::find(Auth::user()->id); 

//$individual=Individual::account()->find($account->id); 
?>
<h1 class="page-title"<i class="icon-th-large"></i>User Account</h1>		
																	
	<div class="widget-header">
		<h3>Basic Information </h3>
		<span class="pull-right" style="padding:8px"><img src="{{url("packages/bootstrap/img/load.gif")}}" style="display: none; width:26px"  id="loader" /></span>
	</div>

	<div class="widget-content">
	<div class="bs-docs-example">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
              <li><a href="#password" data-toggle="tab">Change Password</a></li>              
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="profile">
            	<form id="edit-profile" class="form-horizontal">
												<fieldset>

																									
													
													<div class="control-group">											
														<label class="control-label" for="firstname">First Name</label>
														<div class="controls">
															<input type="text" class="input-xlarge" id="firstname" value="{{ $individual->first_name }}">
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													
													<div class="control-group">											
														<label class="control-label" for="firstname">Middle Name</label>
														<div class="controls">
															<input type="text" class="input-xlarge" id="firstname" value="{{ $individual->middle_name }}">
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->

													<div class="control-group">											
														<label class="control-label" for="lastname">Last Name</label>
														<div class="controls">
															<input type="text" class="input-xlarge" id="lastname" value="{{ $individual->last_name }}">
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
													<div class="control-group">
														<label class="control-label" for="lastname">Change Photo</label>
														<div class="controls">
															<input type="file" id="files" name="files[]" multiple />
															<output id="list"></output>
														</div> <!-- /controls -->
													</div>
													<div class="control-group">	
														<div class="controls">
															<button type="reset" class="btn">Reset</button>
															<button type="submit" class="btn">Add</button>
														</div> <!-- /controls -->				
													</div> <!-- /control-group -->
												</fieldset>
											</form>
              </div>
              <div class="tab-pane fade" id="password">

              	<div class="alert alert-info alert-dismissable" id="paxchg" style="display: none">
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		            <strong>Password changed successfully!</strong> 
		        </div> 

                <form class="form-horizontal" id="my_f" action="" method="POST">
                		<div class="span4 pull-left">
                			<div class="control-group">										
								<label class="control-label" for="password1">Current Password*</label>
								<div class="controls">
								<input type="hidden" value="{{url('password/change')}}" id="urlPass" />	
								<input type="hidden" value="{{url('password/pax')}}" id="urlPax" />	
								<input type="password" class="input-xlarge" id="olpax"  value="" required><br/><br/>
								<span id="fdbk"></span>
								</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group" style="display: none" id="np">											
								<label class="control-label" for="password1">New Password</label>
								<div class="controls">
								<input type="password" class="input-xlarge" id="npax" value=""><br/><br/>
    							<span id="fb"></span> 
								</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group" style="display: none" id="cp">											
								<label class="control-label" for="password2">Confirm Password</label>
								<div class="controls">
								<input type="password" class="input-xlarge" id="cpax" value="">
								<br/><br/>
    							<span id="fbk"></span> 
								</div> <!-- /controls -->				
							</div>
							<div class="controls" >
								<button type="button" style="display: none" class="btn btn-primary" id="chbtn">Reset</button> 
							</div> 
               			</div>
                	</form>
              </div>
        
            </div>
        </div>
	</div>



@stop