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
                                        <th>Amount</th>
                                        <th>Option</th>
                                       
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>   
                                                <button type="button" class="btn  btn-primary" >
                                                    Take cash
                                                </button>

                                           
                                        </td>
                                    </tr>
 

                                </tbody>
                            </table>

                        </div> <!-- /widget-content -->
@stop


