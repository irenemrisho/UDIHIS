@extends('dashboard')
@section('main')
<h1 class="page-title">
					<i class="icon-th-large"></i>
					Manage medicine					
				</h1>
				
				
				<div class="row">
					
					<div class="span9">
				
						
							<div class="widget-header">
								<h3>Medicine </h3>
							</div> <!-- /widget-header -->
									
							<div class="widget-content">


								<div class="tabbable">
									<ul class="nav nav-tabs">
									  <li class="active">
									    <a href="#1" data-toggle="tab">Profile</a> 
									  </li>
									  <li class=""><a href="#2" data-toggle="tab">setting</a></li>
									</ul>
                                                                   
                                             
                                                                        
									<div class="tab-content">
										<div class="tab-pane " id="2">
						

                                                                                    <form id="edit-profile" class="form-horizontal" action="manage_medicine" method="post">
                                                <fieldset>
                                                    <div class="control-group">  
                                                     <label class="control-label" for="password">Password</label>
                                                        <div class="controls">
                                                            <input type="password" class="input-xlarge" name="password" id="" value="">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                              
                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="n_password">New Password</label>
                                                        <div class="controls">
                                                            <input type="password" class="input-xlarge " id="" name="password">
                                                            
                                                        </div> <!-- /controls -->               
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="n_password">Confirm New Password</label>
                                                        <div class="controls">
                                                            <input type="password" class="input-xlarge " id="" name="password">
                                                            
                                                        </div> <!-- /controls -->               
                                                    </div> <!-- /control-group -->

                                                    
                                                    
                                                    <div class="pull-right"> 
                                                        <button type="submit" class="btn btn-primary">Add</button>
                                                    </div>
                                                </fieldset>
                                            </form> <div class="pull-right"> 
                                                <a href=""><button class="btn">Cancel</button></a>		</div>	</div>
										
										<div class="tab-pane active" id="1">
                                                                                        
											<div class="widget widget-table">
										
	<div class="widget-header">
			   	</div> <!-- /widget-header -->
												
												<div class="widget-content">
												
												</div> <!-- /widget-content -->
												
											
										</div>
										
									</div>	
							</div>
						</div>
					</div>
				</div>
	</div>	

@stop



