@extends('dashboard')
@section('main')
<h1 class="page-title">
					<i class="icon-th-large"></i>
					Manage goods					
				</h1>
				
				
				<div class="row">
					
					<div class="span9">
				
						
							<div class="widget-header">
								<h3>Goods </h3>
							</div> <!-- /widget-header -->
									
							<div class="widget-content">


								<div class="tabbable">
									<ul class="nav nav-tabs">
									  <li class="active">
									    <a href="#1" data-toggle="tab">Edit goods</a>
									  </li>
									 
									</ul>
									<div class="tab-content">
					
										
										<div class="tab-pane active" id="1">
                                                                                       
                                                 <?php  $product=Product::find($_GET['edit']); ?>                                           
                                                <form id="edit-profile" class="form-horizontal" action="edit_good?edit={{$_GET['edit']}}" method="post">
                                                <fieldset>
                                                    <div class="control-group">  
                                                     <label class="control-label" for="name">Product name</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="name" id="" value="{{$product->name}}">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="quantity">Quantity</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" name="quantity" value="{{$product->quantity}}">
                                                            
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


