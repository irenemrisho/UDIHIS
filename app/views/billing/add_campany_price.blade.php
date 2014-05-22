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
                                        <a href="#1" data-toggle="tab">Add campany price</a>
                                      </li>
                                     
                                    </ul>
                                    <div class="tab-content">
                    
                                        
                                        <div class="tab-pane active" id="1">
                                                                                       
                                                 <?php  $Services =Service::all(); 
                                                        $campany_id = $_GET['cmp'];
                                                       
                                                 ?>                            
                                                 <form id="edit-profile" class="form-horizontal" action="add_campany_price?cmp={{$campany_id}}" method="post">
                                                <fieldset>
                                                @foreach($Services as $Service )
                                                    <div class="control-group">  
                                                     <label class="control-label" for="service{{$Service->id}}">{{$Service->name}}</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-large" name="service{{$Service->id}}" id="" value="">
                                                            
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                                @endforeach
                                                    
                                                    <div class="pull-right"> 
                                                        <button type="submit" class="btn btn-primary">add</button>
                                                    </div>
                                                </fieldset>
                                                </form> <div class="pull-right"> 
                                           
                                                
                                                <a href="Insurance_management"><button class="btn">Cancel</button></a></div>
                                                                                
                                    </div>  
                            </div>
                        </div>
                    </div>
                </div>
    </div>  

@stop


