@extends('dashboard')
@section('page_specific_css')
    <!-- datatable includes -->
    {{HTML::style('packages/datatables/media/css/jquery.dataTables.css')}}
    {{HTML::style('packages/datatables/media/css/jquery.dataTables_themeroller.css')}}
@stop

@section('page_specific_scripts')
    <!-- Datatable includes -->
    {{HTML::script('packages/datatables/media/js/jquery.dataTables.js')}}
    <script type="text/javascript">
            $('#service_table').dataTable({
                ordering:false,
                "jQueryUI": true
            });
    </script>
@stop
@section('main')
<h1 class="page-title">
					<i class="icon-th-large"></i>
					Manage servicce				
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
									    <a href="#1" data-toggle="tab">Service list</a>
									  </li>
									  <li class=""><a href="#2" data-toggle="tab">Add service</a></li>
									</ul>
                                                                   
             
                                       <?php if(isset($_GET['msg'])){
                                        if($_GET['msg']==1){?>
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <strong>Successfully added</strong>
                                        </div>
                                        <?php }elseif ($_GET['msg']==2) { ?>
                                        <div class="alert alert-warning alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <strong>Adding failed</strong>
                                        </div>
                                        <?php }elseif($_GET['msg']==3){?>
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <strong>Successfully updated</strong>
                                        </div>
                                        <?php }elseif ($_GET['msg']==4) { ?>
                                        <div class="alert alert-warning alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <strong>Update failed</strong>
                                        </div>
                                        <?php }elseif ($_GET['msg']==5) { ?>
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <strong>Successfully deleted</strong>
                                        </div>
                                        <?php }}?>
                                                                        
									<div class="tab-content">
										<div class="tab-pane " id="2">
						

                                                <form id="edit-profile" class="form-horizontal" action="service_management" method="post">
                                                <fieldset>
                                                    <div class="control-group">  
                                                     <label class="control-label" for="service_name">Service name</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="service_name" id="" value="">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">  
                                                     <label class="control-label" for="cash">Cash</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="cash" id="" value="" placeholder="price">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                    <!-- retrieve all campanies-->
                                                    <?php  $Campanies =InsuranceCompany::all(); ?>
                                                    @foreach($Campanies as $Campany )
                                                    <div class="control-group">  
                                                     <label class="control-label" for="Campany_{{$Campany->id}}">{{$Campany->name}}</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="Campany_{{$Campany->id}}" id="" value="" placeholder="price">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->

                                                    @endforeach
                                                    
                                                    <div class="pull-right"> 
                                                        <button type="submit" class="btn btn-primary">Add</button>
                                                    </div>
                                                </fieldset>
                                            </form> <div class="pull-right"> 
                                                <a href="service_management"><button class="btn">Cancel</button></a>		</div>	</div>
										
										<div class="tab-pane active" id="1">
                                                                                        
											<div class="widget widget-table">
										
												
												<div class="widget-content">
												
													<table id="service_table" class="table table-striped table-bordered">
													 				
															
														
														<thead>
															<tr>
																<th>#</th>
																<th>service name</th>
																
																<th>Campanies' price</th>
																<th>Options</th>
															</tr>
														</thead>
														
                                                        <tbody>
                                                        <?php $index=1; ?>
												@foreach($services as $service)
															<tr>
																<td>{{$index}}</td>
																<td>{{$service->name}}</td>
													<td class="action-td" id={{$service->id}}>
														<a href="" 
								                            rel="tooltip" data-placement="top" data-original-title="campanies' price" class="btn btn-small btn-primary fetch-price" data-toggle="modal" data-target="#price_campany" >
								                                <i class="icon-money"></i>
								                        </a> 
													</td>											
													<td class="action-td">
                                                                                                                       
                                                        <a href="edit_service?edit={{$service->id}}"><span class="icon-edit btn btn-small btn btn-primary">
                                                            </span>
                                                        </a>                                                       
													 </td>
															</tr>
                                                  <?php $index++; ?>
															@endforeach
															
			
															
															
														</tbody>
													</table>
												<div id="price_campany" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							                           
							                </div>
												</div> <!-- /widget-content -->
												
											
										</div>
										
									</div>	
							</div>
						</div>
					</div>
				</div>
	</div>	

@stop


