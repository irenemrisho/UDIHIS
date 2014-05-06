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
									    <a href="#1" data-toggle="tab">Medicine list</a>
									  </li>
									  <li class=""><a href="#2" data-toggle="tab">Add medicine</a></li>
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
						

                                                                                    <form id="edit-profile" class="form-horizontal" action="manage_medicine" method="post">
                                                <fieldset>
                                                    <div class="control-group">  
                                                     <label class="control-label" for="Medicine_name">Medicine name</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="Medicine_name" id="" value="">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                              
                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="Price">Price</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" name="Price">
                                                            
                                                        </div> <!-- /controls -->               
                                                    </div> <!-- /control-group -->

                                                     <div class="control-group">                                         
                                                        <label class="control-label" for="Manufactured_date">Manufactured date</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge date " id="" name="Manufactured_date">
                                                            
                                                        </div> <!-- /controls -->               
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="Expire_date">Expire date</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge date " id="" name="Expire_date">
                                                            
                                                        </div> <!-- /controls -->               
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="Quantity">Quantity</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" name="Quantity">
                                                            
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->
                                                    
                                                    
                                                    <div class="pull-right"> 
                                                        <button type="submit" class="btn btn-primary">Add</button>
                                                    </div>
                                                </fieldset>
                                            </form> <div class="pull-right"> 
                                                <a href="provide_medication"><button class="btn">Cancel</button></a>		</div>	</div>
										
										<div class="tab-pane active" id="1">
                                                                                        
											<div class="widget widget-table">
										
	<div class="widget-header">
			    <form class="form-search" style="margin-left:4px">
				    <input type="text" id="search_m" class="input-medium search-query" placeholder="Search">
				</form> 
	</div> <!-- /widget-header -->
												
												<div class="widget-content">
												
													<table class="table table-striped table-bordered" id="mtable">
													 				
															
														
														<thead>
															<tr>
																<th>#</th>
																<th>Medicine name</th>
																
																<th>Price</th>
																<th>Quantity</th>
                                                                                                                                <th>Expire date</th>
																<th>Options</th>
															</tr>
														</thead>
														
                                                                                                                <tbody>
                                                                                                                <?php $index=1; ?>
														@foreach($medicines as $medicine)
															<tr>    <td>{{$index}}</td>
																<td>{{$medicine->name}}</td>
																<td>{{$medicine->price}} </td>
																<td>{{$medicine->quantity}} </td>
                                                                                                                                <td>{{$medicine->exp_date}} </td>
                                                                                                                                
                                                                                                                                
																<td class="action-td">
                                                                                                                                    
                                                                                                                                    <a href="edit_medicine?edit={{$medicine->id}}"><span class="icon-edit btn btn-small btn btn-primary">
                                                                                                                                        </span>
                                                                                                                                    </a>&nbsp;
                                                                                                                                        <a href="manage_medicine?dlt={{$medicine->id}}" onclick="return confirm('Are you sure you want to delete');" ><span class="icon-trash  btn btn-small btn-danger ">
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



