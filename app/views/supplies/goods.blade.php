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
            
            $('#manage_product_table').dataTable({
                ordering:false,
                "jQueryUI": true
            });
    </script>
@stop
@section('main')
<h1 class="page-title">
					<i class="icon-th-large"></i>
					Manage product				
				</h1>
				
				
				<div class="row">
					
					<div class="span9">
				
						
							<div class="widget-header">
								<h3>Product </h3>
							</div> <!-- /widget-header -->
									
							<div class="widget-content">


								<div class="tabbable">
									<ul class="nav nav-tabs">
									  <li class="active">
									    <a href="#1" data-toggle="tab">Product list</a>
									  </li>
									  <li class=""><a href="#2" data-toggle="tab">Add product</a></li>
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
                                            <?php }}?>
                                                                        
									<div class="tab-content">
										<div class="tab-pane " id="2">
						

                                              <form id="edit-profile" class="form-horizontal" action="goods" method="post">
                                                <fieldset>
                                                    <div class="control-group">  
                                                     <label class="control-label" for="name">Product name</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="name" id="" value="">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                              		<div class="control-group">                                         
                                                        <label class="control-label" for="quantity">Quantity</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" name="quantity">
                                                            
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->
                                                    
                                                    
                                                    <div class="pull-right"> 
                                                        <button type="submit" class="btn btn-primary">Add</button>
                                                    </div>
                                                </fieldset>
                                            </form> <div class="pull-right"> 
                                                <a href="goods"><button class="btn">Cancel</button></a></div>	</div>
										
										<div class="tab-pane active" id="1">
                                                                                        
											<div class="widget widget-table">
											
											<div class="widget-content">
												
													<table id="manage_product_table" class="table table-striped table-bordered" id="mtable">
													 	
														<thead>
														<!-- goods -->
															<tr>
																<th>#</th>
																<th>Product name</th>
																<th>Quantity</th>
																<th>Options</th>
															</tr>
														</thead>
														
                                                        <tbody>
                                                        <?php $index=1; ?>
            												@foreach($goods as $good )
															<tr>
																<td>{{$index}}</td>
																<td>{{$good->name}}</td>
																<td>{{$good->quantity}}</td>                                        
																<td class="action-td">

                                                                 <a href="edit_good?edit={{$good->id}}"><span class="icon-edit btn btn-small btn btn-primary">
                                                                    </span>
                                                                </a>&nbsp;
                                                                    <a href="goods?dlt={{$good->id}}" onclick="return confirm('Are you sure you want to delete');" ><span class="icon-trash  btn btn-small btn-danger ">
                                                                    <span>
                                                                 </a>
                                                                                                                                        
																</td>
															</tr>
														<?php $index++; ?>
            											@endforeach
														</tbody>
													</table>
												
												</div> <!-- /widget-content -->
												
											
										</div>
										
									</div>	
							</div>
						</div>
					</div>
				</div>
	</div>	

@stop



