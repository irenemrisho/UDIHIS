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
            $('#insurance_table').dataTable({
                ordering:false,
                "jQueryUI": true
            });
    </script>
@stop

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
                                        <a href="#1" data-toggle="tab">Campanies</a>
                                      </li>
                                      <li class=""><a href="#2" data-toggle="tab">Add campany</a></li>
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
                        

                                                <form id="edit-profile" class="form-horizontal" action="Insurance_management" method="post">
                                                <fieldset>
                                                    <div class="control-group">  
                                                     <label class="control-label" for="campany_name">Campany name</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="campany_name" id="" value="">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">  
                                                     <label class="control-label" for="contact_person">Contact person</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="contact_person" id="" value="">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">  
                                                     <label class="control-label" for="P_O_BOX">P.O. BOX</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="P_O_BOX" id="" value="">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">  
                                                     <label class="control-label" for="City">City</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="City" id="" value="">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">  
                                                     <label class="control-label" for="email">Email</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="email" id="" value="">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">  
                                                     <label class="control-label" for="payment_type">Payment type</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" name="payment_type" id="" value="">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                    
                                                    <div class="control-group">  
                                                     <label class="control-label" for="contract_from">Contract from</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" id="campanyfromdate" name="contract_from" id="" value="">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                    <div class="control-group">  
                                                     <label class="control-label" for="contract_to">Contract to</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge" id="campanytodate" name="contract_to" id="" value="">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->

                                                    
                                                    
                                                    <div class="pull-right"> 
                                                        <button type="submit" class="btn btn-primary">Add</button>
                                                    </div>
                                                </fieldset>
                                            </form> <div class="pull-right"> 
                                                <a href="service_management"><button class="btn">Cancel</button></a>        </div>  </div>
                                        
                                        <div class="tab-pane active" id="1">
                                                                                        
                                            <div class="widget widget-table">
                                        
                    
                                                
                                                <div class="widget-content">
                                                
                                                    <table id="insurance_table" class="table table-striped table-bordered">
                                                                    
                                                            
                                                        
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Campany name</th>
                                                                <th>Contact person</th>
                                                                <th>Addree</th>
                                                                <th>Payment type</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        
                                                       <tbody>
                                                                                                                
                                                            <?php $index=1; ?>                                                    
                                                            @foreach($campanies as $campany)
                                                            <tr>    
                                                                <td>{{$index}}</td>
                                                                <td>{{$campany->name}}</td>
                                                                <td>{{$campany->contact_name}}</td>
                                                                <td>{{$campany->pobox}} </td>
                                                                <td>{{$campany->payement_type}} </td>                                                             
                                                                <td class="action-td" id="{{$campany->id}}">
                                                                    <a href="edit_insurance_campany?edit={{$campany->id}}" class="icon-edit btn btn-small btn btn-primary"></a> &nbsp;                  
                                                                    <a href="javascript:;" class="btn btn-small btn-danger deleteCampany">
                                                                        <i class="icon-trash"></i>                              
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






