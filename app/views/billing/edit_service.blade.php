@extends('dashboard')
@section('main')
<h1 class="page-title">
					<i class="icon-th-large"></i>
                    Service management             
                </h1>
                
                
                <div class="row">
                    
                    <div class="span9">
                            <?php  $Service =Service::find($_GET['edit']); ?>  
                        
                            <div class="widget-header">
                                <h3>Edit service</h3>
                            </div> <!-- /widget-header -->
									
							<div class="widget-content">


								<div class="tabbable">
									<ul class="nav nav-tabs">
									  <li class="active">
                                        
									    <a href="#1" data-toggle="tab">{{$Service->name}}</a>
									  </li>
									 
									</ul>
									<div class="tab-content">
					
										
										<div class="tab-pane active" id="1">
                                                                                       
                                                                                     
                                                <form id="edit-profile" class="form-horizontal" action="edit_service?edit={{$_GET['edit']}}" method="post">
                                                <fieldset>
                                                    
                                                    <div class="control-group">  
                                                     <label class="control-label" for="service_price">Price</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="price" id="" value="{{$Service->price}}">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                    
                                                    <div class="pull-right"> 
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </fieldset>
                                            </form> <div class="pull-right"> 
                                                <a href="service_management"><button class="btn">Cancel</button></a>		</div>
                                                                                
									</div>	
							</div>
						</div>
					</div>
				</div>
	</div>	

@stop


