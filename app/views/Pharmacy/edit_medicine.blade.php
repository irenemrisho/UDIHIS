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
									    <a href="#1" data-toggle="tab">Edit Medicine</a>
									  </li>
									 
									</ul>
									<div class="tab-content">
					
										
										<div class="tab-pane active" id="1">
                                                                                       
                                                                                 <?php  $medicine=Medicine::find($_GET['edit']); ?>                                           
                                                <form id="edit-profile" class="form-horizontal" action="edit_medicine?edit={{$_GET['edit']}}" method="post">
                                                <fieldset>
                                                    <div class="control-group">  
                                                     <label class="control-label" for="Medicine_name">Medicine name</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="Medicine_name" id="" value="{{$medicine->name}}">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->

                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="Price">Price</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" name="Price" value="{{$medicine->price}}">
                                                            
                                                        </div> <!-- /controls -->               
                                                    </div> <!-- /control-group -->

                                                     <div class="control-group">                                         
                                                        <label class="control-label" for="Manufactured_date">Manufactured date</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" name="Manufactured_date" value="{{$medicine->price}}">
                                                            
                                                        </div> <!-- /controls -->               
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="Expire_date">Expire date</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" name="Expire_date" value="{{$medicine->man_date}}">
                                                            
                                                        </div> <!-- /controls -->               
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="Quantity">Quantity</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" name="Quantity" value="{{$medicine->quantity}}">
                                                            
                                                        </div> <!-- /controls -->
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


