@extends('dashboard')
@section('main')
<h1 class="page-title">
					<i class="icon-th-large"></i>
                    Insurance management             
                </h1>
                
                
                <div class="row">
                    
                    <div class="span9">
                
                        
                            <div class="widget-header">
                                <h3>Service </h3>
                            </div> <!-- /widget-header -->
									
							<div class="widget-content">


								<div class="tabbable">
									<ul class="nav nav-tabs">
									  <li class="active">
									    <a href="#1" data-toggle="tab">Edit insurance campany</a>
									  </li>
									 
									</ul>
									<div class="tab-content">
					
										
										<div class="tab-pane active" id="1">
                                                                                       
                                                                                 <?php  $InsuranceCompany =InsuranceCompany::find($_GET['edit']); ?>                                           
                                                <form id="edit-profile" class="form-horizontal" action="edit_insurance_campany?edit={{$_GET['edit']}}" method="post">
                                                <fieldset>
                                                    <div class="control-group">  
                                                     <label class="control-label" for="campany_name">Campany name</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="campany_name" id="" value="{{$InsuranceCompany->name}}">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">  
                                                     <label class="control-label" for="contact_person">Contact person</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="contact_person" id="" value="{{$InsuranceCompany->contact_name}}">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">  
                                                     <label class="control-label" for="P_O_BOX">P.O. BOX</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="P_O_BOX" id="" value="{{$InsuranceCompany->pobox}}">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">  
                                                     <label class="control-label" for="City">City</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="City" id="" value="{{$InsuranceCompany->city}}">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">  
                                                     <label class="control-label" for="payment_type">Payment type</label>
                                                        <div class="controls">
                                                            <select class="form-control"  data-placement="payment_type" name="payment_type">
                                                        <option >{{$InsuranceCompany->payement_type}}</option>                                                        
                                                        <option>Sick sheet</option>
                                                        <option>Insurance</option>
                                                        </select>
                                                        </div>                                     
                                              
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">  
                                                     <label class="control-label" for="email">Email</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="email" id="" value="{{$InsuranceCompany->contact_email}}">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                    
                                                    <div class="control-group">  
                                                     <label class="control-label" for="contract_from">Contract from</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" id="campanyfromdate" name="contract_from" id="" value="{{$InsuranceCompany->from}}">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">  
                                                     <label class="control-label" for="contract_to">Contract to</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" id="campanytodate" name="contract_to" id="" value="{{$InsuranceCompany->to}}">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->

                                                    
                                                    
                                                    <div class="pull-right"> 
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </fieldset>
                                            </form> <div class="pull-right"> 
                                                <a href="provide_medication"><button class="btn">Cancel</button></a>		</div>
                                                                                
									</div>	
							</div>
						</div>
					</div>
				</div>
	</div>	

@stop


