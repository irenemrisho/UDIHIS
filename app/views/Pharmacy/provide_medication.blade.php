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
            
            $('#paid_table').dataTable({
                ordering:false,
                "jQueryUI": true
            });
    </script>
@stop
@section('main')
 <h1 class="page-title">
                        <i class="icon-th-list"></i>
                            Prescription List
			
                    </h1>

                    <div class="action-nav-normal">
                        <div class="row">



                        </div> <!-- /stat-container -->

                        <div class="widget-header">
                         <form class="form-search" style="margin-left:4px">
                    <input type="text" id="search_m" class="input-medium search-query" placeholder="Search">
                </form> 
                           
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
                            <table id="provide_medication_table" class="table  table-bordered">
                            <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>patient</th>
                                        <th>File number</th>
                                        <th>Number medicine</th>
                                        <th>Action</th>  
                               
                                    </tr>
                            </thead>
                            <tbody id="provide_medication">
                                    <?php $index=1; ?>
                                    @foreach($provided_medicines as $provided_medicine)
                                 <tr><td>{{$index}}</td>
                                    <td>{{Patient::find($provided_medicine->pv_id)->firstname}}</td>
                                    <td>{{Patient::find($provided_medicine->pv_id)->filenumber}}</td>
                                    <td>{{$provided_medicine->count}}</td>
                                    <td class="action-td" id="{{$provided_medicine->pv_id}}">
                                        <a href="#recommended" role="button" class="btn btn-primary fetch-recommendation" data-toggle="modal">Provide</a>
                                    </td>
                                </tr>
                                    <?php $index++; ?>
                                    @endforeach
                                    
                                </tbody>
                            </table>

                            <div id="recommended" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <form  action="provide_recommended" method="post">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3 id="myModalLabel">Recommended medicine</h3>
                            </div>
                            <div class="modal-body">
                        
                            <div id="profile">


                            </div>                                                                              

                            </div>
                            <div class="modal-footer" id="">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                <button type="submit"  aria-hidden="true" class="btn btn-primary fetch-recommendation">Provide</button>
                            </div>
                            </form>
                </div>

                        </div> <!-- /widget-content -->


@stop


