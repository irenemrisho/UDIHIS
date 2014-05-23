@extends('dashboard')
@section('main')
<h1 class="page-title">
                        <i class="icon-user-md"></i>
                        Billing                    
</h1>

                    <div class="action-nav-normal">
                        <div class="row">



                        </div> <!-- lp/stat-container -->

                        <div class="widget-header">
                            <i class="icon-th-list"></i>
                            <h3>Manage payment</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
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
                            <table class="table table-striped table-bordered">
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
                        <a href="patient_pdf_invoice" 
                            rel="tooltip" data-placement="top" data-original-title="print invoice" class="btn btn-small btn-success">
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
@stop


