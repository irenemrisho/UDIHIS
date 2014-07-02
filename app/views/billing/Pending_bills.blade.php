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
        $('#payment_table').dataTable({
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
                <i class="icon-th-large"></i>
                Payment           
            </h1>
            
            
            <div class="row">
                
                <div class="span9">
            
                    
                        <div class="widget-header">
                            <h3>Payment </h3>
                        </div> <!-- /widget-header -->
                                
                        <div class="widget-content">


                            <div class="tabbable">
                                <ul class="nav nav-tabs">
                                  <li class="active">
                                    <a href="#1" data-toggle="tab">Pending bills</a>
                                  </li>
                                  <li class=""><a href="#2" data-toggle="tab">Paid bills</a></li>
                                </ul>
                                    <?php if(isset($_GET['msg'])){
                                if($_GET['msg']==1){?>
                                <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Successfully paid</strong>
                                </div>
                                <?php }elseif ($_GET['msg']==2) { ?>
                                <div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>adding payment failed....Please select atleast one payment</strong>
                                </div>
                                <?php }}?> 
                                                                    
                                <div class="tab-content">
                                    <div class="tab-pane " id="2">
                    

                                            <div> 
                        <table id="paid_table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Patient Name</th>
                                    <th>File number </th>
                                    <th>Payment #</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </thead>

                            <tbody>
            <?php $index=1; ?>
            @foreach($paids as $paid )
                                <tr>

                <td>{{$index}} </td>
                <td>{{Patient::find($paid->patient_id)->firstname." ".Patient::find($paid->patient_id)->lastname}}</td>
                <td>{{Patient::find($paid->patient_id)->filenumber}}</td>
                <td>{{$paid->count}}</td>
                
                <td class="action-td" id="{{$paid->patient_id}}">
                   <a href="" 
                        rel="tooltip" data-placement="top" data-original-title="paid bills" class="btn btn-small btn-primary fetch-paid" onclick="fetchPaid({{$paid->patient_id}})" data-toggle="modal" data-target="#paids" >
                            <i class="icon-money"></i>
                    </a>
                   <a href="getPaymentReceipt?p_id={{$paid->patient_id}}"
                        rel="tooltip" data-placement="top" data-original-title="print receipt" class="btn btn-small btn-success" >
                            <i class="icon-print"></i>
                    </a>                               
                </td>

                </tr>

                <?php $index++; ?>
            @endforeach
                            </tbody>
            </table>
            <div id="paids" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
            <form  action="" method="post">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel2">Service paid</h3>
            </div>
            <div class="modal-body">
        
            <div id="profile2">


            </div>                                                                              

            </div>
            <div class="modal-footer" id="">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                
            </div>
            </form>
            </div>
            </div> <!-- /widget-content --></div>
                                    
                                    <div class="tab-pane active" id="1">
                                     <div> 
                            <table id="payment_table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Patient Name</th>
                                        <th>File number </th>
                                        <th>Payment #</th>
                                        <th>Action</th>
                                       
                                    </tr>
                                </thead>

                                <tbody>
                <?php $index=1; ?>
                @foreach($payments as $payment)
                                    <tr>

                    <td>{{$index}} </td>
                    <td>{{Patient::find($payment->patient_id)->firstname." ".Patient::find($payment->patient_id)->lastname}}</td>
                    <td>{{Patient::find($payment->patient_id)->filenumber}}</td>
                    <td>{{$payment->count}}</td>
                    
                    <td class="action-td" id="{{$payment->patient_id}}">
                        <a href="" 
                            rel="tooltip" data-placement="top" data-original-title="pay" class="btn btn-small btn-primary fetch-payments" data-toggle="modal" data-target="#payment" >
                                <i class="icon-money"></i>
                        </a>
                        <a href="getPaymentInvoice?p_id={{$payment->patient_id}}"
                            rel="tooltip" data-placement="top" data-original-title="print invoice" class="btn btn-small btn-success get-invoice-payment" >
                                <i class="icon-print"></i>
                        </a>                               
                    </td>

                    </tr>
 
                    <?php $index++; ?>
                @endforeach
                                </tbody>
                            </table>

                <div id="payment" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <form  action="provide_payments" method="post">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3 id="myModalLabel">Service payment</h3>
                            </div>
                            <div class="modal-body">
                        
                            <div id="profile">


                            </div>                                                                              

                            </div>
                            <div class="modal-footer" id="">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                <button type="submit"  aria-hidden="true" class="btn btn-primary fetch-payments">take cash</button>
                            </div>
                            </form>
                </div>
                        </div> <!-- /widget-content -->
                                </div>  
                        </div>
                    </div>
                </div>
            </div>
</div>  

@stop






