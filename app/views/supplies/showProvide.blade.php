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
            $('#provide_medication_table').dataTable({
                ordering:false,
                "jQueryUI": true
            });
            
            $('#product_request_table').dataTable({
                ordering:false,
                "jQueryUI": true
            });
    </script>
@stop
@section('main')
 <h1 class="page-title">
                    <i class="icon-th-list"></i>
                        Product request list

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
                        <strong>Successfully provided</strong>
                    </div>
                    <?php }elseif ($_GET['msg']==2) { ?>
                    <div class="alert alert-warning alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Providing failed....Please select atleast one medicine</strong>
                    </div>
                    <?php }}?>

                    <table class="table  table-bordered" style="boarder:" >
            <thead>
                <tr>

                    <th>Product Name</th>
                    <th>Requestor</th>
                    <th>Requested quantity</th>
           
                </tr>
        </thead>
        <tbody id="provide_medication">
                <?php $index=1; ?>
                @foreach($product_requests as $product_request)
             <tr>
                <td>{{Product::find($product_request->product_id)->first()->name}}</td>
                <td>{{User::find($product_request->user_id)->first()->first_name." ".User::find($product_request->user_id)->first()->last_name}}</td>
                <td>{{$product_request->quantity}}</td>
             </tr>
                <?php $index++; ?>
                @endforeach
                
            </tbody>
            </table>
        <form id="edit-profile" class="form-horizontal" action="showProvide?rq_q={{$product_request->quantity}}&rq_id={{$product_request->id}}&p_id={{$product_request->product_id}}&us_id={{$product_request->user_id}}" method="post">
                        <fieldset>
                       
                            <div class="control-group">  
                             <label class="control-label" for="request">Quantity provided</label>
                                <div class="controls">
                                    <input type="text" class="input-large" name="request" id="" value="">
                                    
                                </div>                                       
                      
                            </div> <!-- /control-group -->
                      
                            
                            <div class="pull-right"> 
                                <button type="submit" class="btn btn-primary">Provide</button>
                            </div>
                        </fieldset>
                        </form> <div class="pull-right"> 
                   
                        
                        <a href="request"><button class="btn">Cancel</button></a></div>
        
                            


                        </div> <!-- /widget-content -->


@stop


