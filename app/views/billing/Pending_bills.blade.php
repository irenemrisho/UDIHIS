@extends('dashboard')
@section('main')
<h1 class="page-title">
                        <i class="icon-user-md"></i>
                        Billing                    
</h1>

                    <div class="action-nav-normal">
                        <div class="row">



                        </div> <!-- /stat-container -->

                        <div class="widget-header">
                            <i class="icon-th-list"></i>
                            <h3>Manage payment</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Patient Name</th>
					<th>File number </th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                       
                                    </tr>
                                </thead>

                                <tbody>
 				<?php $index=1; ?>
				@foreach($payments as $payment)
                                    <tr>

					<td>{{$index}} </td>
					<td>{{Patient::find($payment->patient_id)->firstname}}</td>
					<td>{{Patient::find($payment->patient_id)->filenumber}}</td>
                                        <td>{{Service::find($payment->service_id)->price}}</td>
                                       <td class="action-td">
                                       <a href="Pending_bills?pay={{$payment->id}}"  >
						<span class=" btn btn-small btn btn-primary">Take cash</span>
                                         </a>

                                    	</td>
                                    </tr>
 
    				<?php $index++; ?>
				@endforeach
                                </tbody>
                            </table>

                        </div> <!-- /widget-content -->
@stop


