@extends('dashboard')
@section('main')
	
<?php 
$individual= User::find(Auth::user()->id); 

//$individual=Individual::account()->find($account->id); 
?>
<h1 class="page-title"<i class="icon-th-large"></i>User Account</h1>		
																	
	<div class="widget-header">
		<h3>Basic Information </h3>
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
                                                        <div class="controls">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        image
                                                                    </td>
                                                                    <td><?php echo "  " . $individual->username ?></td>
                                                                </tr>
                                                            </table>
                                                        </div>
													</div>
													<div class="control-group">											
														<label class="control-label" for="username">Username</label>
														<div class="controls">
														<input type="text" class="input-xlarge" id="username" value="{{ $individual->username }}" >
														</div>			
													</div>													
													
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
														<div class="controls">
														<a class='btn btn-primary' href='javascript:;'>
														Change photo...
														<input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
														</a>&nbsp;<span class='label label-info' id="upload-file-info"></span>
														</div>
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
                <form class="form-horizontal" id="password_form" action="{{URL::to('')}}" method="POST">
                		<div class="span4 pull-left">
                			<div class="control-group">											
								<label class="control-label" for="password1">Current Password*</label>
								<div class="controls">
								<input type="password" class="input-xlarge" id="password1" value="" required>
								</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label class="control-label" for="password1">New Password</label>
								<div class="controls">
								<input type="password" class="input-xlarge" id="password1" value="">
								</div> <!-- /controls -->				
							</div> <!-- /control-group -->
							<div class="control-group">											
								<label class="control-label" for="password2">Confirm Password</label>
								<div class="controls">
								<input type="password" class="input-xlarge" id="password2" value="">
								</div> <!-- /controls -->				
							</div>
							<div class="controls">
								<button type="reset" class="btn">Cancel</button>
								<button type="submit" class="btn btn-primary">Reset</button>
							</div> 
               			</div>
                	</form>
              </div>
        
            </div>
        </div>
	</div>


@stop