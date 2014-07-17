@extends('dashboard')
@section('main')				
				<h1 class="page-title">
					<i class="icon-th-large"></i>
					Manage Patients					
				</h1>
				<div class="row">
					<div class="span9">
							<div class="widget-header">
								<h3>Patients</h3>
							</div> <!-- /widget-header -->
							<div class="widget-content">
								<div class="tabbable">
									<ul class="nav nav-tabs">
									  
									  <li class=""><a href="#1" data-toggle="tab">Edit Patient</a></li>
									</ul>

									<div class="tab-content">
										<div class="tab-pane " id="1">
						
											<form id="edit-profile" class="form-horizontal" action="{{URL::to('patients/edit/' . $patient->id )}}" method="post">
                                                <fieldset>
                                              
                                                     <div class="control-group"> 
                                                    <label class="control-label" for="first_name">First name</label>
                                                        <div class="controls">
                                                             <input type="text" class="input-xlarge " id="" value={{$patient->first_name}} name="first_name">
                                                        </div> <!-- /controls --> 
                                                        </div>
                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="middle_name">Middle name</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" value={{$patient->middle_name}} name="middle_name">
                                                            
                                                        </div> <!-- /controls -->               
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="last_name">Last name</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" value={{$patient->last_name}} name="last_name">
                                                            
                                                        </div> <!-- /controls -->               
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="birth_date">Birth of Date</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" name="birth_date" value={{$patient->birth_date}}>
                                                            
                                                        </div> <!-- /controls -->               
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="address">Address</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" name="address" value={{$patient->address}}>
                                                            
                                                        </div> <!-- /controls -->               
                                                    </div> <!-- /control-group -->

                                                     <div class="control-group">                                         
                                                        <label class="control-label" for="contact">Contact</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" name="contact" value={{$patient->contact}}>
                                                            
                                                        </div> <!-- /controls -->               
                                                    </div> <!-- /control-group -->

                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="gender">Gender</label>
                                                        <div class="controls">
                                                        	{{Form::select('gender',array('Male'=>'Male','Female'=>'Female'))}}
                        	
                                                        </div>
                                                                     
                                                    </div> <!-- /control-group -->
                                                    
                                                    <div class="pull-right">
                                                        <button class="btn">Cancel</button> <button type="submit" class="btn btn-primary">Edit</button>
                                                    </div>
                                                </fieldset>
                                            </form>
										</div>
										
										
							</div>
						</div>
					</div>
				</div>
	</div>	

@stop