@extends('dashboard')

@section('main')
 <h1 class="page-title">
                        <i class="icon-th-list"></i>
                            Request product
			
                    </h1>

                    <div class="action-nav-normal">
                        <div class="row">

                        </div> <!-- /stat-container -->

                        <div class="widget-header">
                            
                        </div> <!-- /widget-header -->
                    
                        <div class="widget-content">
                           <?php if(isset($_GET['msg'])){
                                if($_GET['msg']==1){?>
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>request successfully sent</strong>
                                </div>
                                <?php }elseif ($_GET['msg']==2) { ?>
                                <div class="alert alert-warning alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Providing failed....Please select atleast one medicine</strong>
                                </div>
                                <?php }}?>
                            
                                <form id="edit-profile" class="form-horizontal" action="product_request" method="post">
                                                <fieldset>
                                                    <div class="control-group">  
                                                     <label class="control-label" for="product_name">Product name</label>
                                                        <div class="controls">
                                                            <select id="product_name" name="product_name" class="form-control input-xlarge">
                                                            <option>Choose product</option>
                                                            @foreach($products as $product)
                                                                <option value="{{$product->id}}" >{{$product->name}}</option>
                                                            @endforeach                                                           
                                                           
                                                        </select>
                                                        </div>                                       
                                              
                                                    </div> <!-- /control-group -->
                                              
                                                    <div class="control-group">                                         
                                                        <label class="control-label" for="product_quantity">Quantity</label>
                                                        <div class="controls">
                                                            <input type="text" class="input-xlarge " id="" name="product_quantity">
                                                            
                                                        </div> <!-- /controls -->               
                                                    </div> <!-- /control-group -->
                                                    
                                                    <div class="pull-right"> 
                                                        <button type="submit" class="btn btn-primary">Send request</button>
                                                    </div>
                                                </fieldset>
                                            </form>
                            

                        </div> <!-- /widget-content -->


@stop


