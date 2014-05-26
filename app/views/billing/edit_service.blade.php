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
                                                    @foreach($Price_companies as $Price_company)
                                                    <div class="control-group">  
                                                     <label class="control-label" for="campany_{{$Price_company->company_id}}">{{InsuranceCompany::where('id',$Price_company->company_id)->first()->name}}</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="campany_{{$Price_company->company_id}}" id="" value="{{$Price_company->price}}">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                    @endforeach
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


