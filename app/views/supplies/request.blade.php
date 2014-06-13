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

                            <table id="product_request_table" class="table  table-bordered">
                            <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>product name</th>
                                        <th>requester</th>
                                        <th>quantity</th>
                                        <th>Action</th>  
                               
                                    </tr>
                            </thead>
                            <tbody id="provide_medication">
                                    
                                 <tr><td>d</td>
                                    <td>d</td>
                                    <td>dfd</td>
                                    <td>dsd</td>
                                    <td >d</td>
                                </tr>
                                    
                                </tbody>
                            </table>


                        </div> <!-- /widget-content -->


@stop


