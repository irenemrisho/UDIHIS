@extends('dashboard')
@section('main')
<h1 class="page-title">
                        <i class="icon-user-md"></i>
                        Patients                    
</h1>

                    <div class="action-nav-normal">
                        <div class="row">



                        </div> <!-- /stat-container -->

                        <div class="widget-header">
                            <i class="icon-th-list"></i>
                            <h3>Manage patients records</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Prescribed drugs</th>
                                        <th>Diagnosis</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="action-td">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                    Option
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Setting</a></li>
                                                    <li><a href="#">History</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="action-td">
                                            <a href="javascript:;" class="btn btn-small btn-default">
                                                <i class="icon-cog"></i>                                
                                            </a>                        
                                            <a href="javascript:;" class="btn btn-small">
                                                <i class="icon-remove"></i>                     
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="action-td">
                                            <a href="javascript:;" class="btn btn-small btn-default">
                                                <i class="icon-cog"></i>                                
                                            </a>                        
                                            <a href="javascript:;" class="btn btn-small">
                                                <i class="icon-remove"></i>                     
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="action-td">
                                            <a href="javascript:;" class="btn btn-small btn-default">
                                                <i class="icon-cog"></i>                                
                                            </a>                    
                                            <a href="javascript:;" class="btn btn-small">
                                                <i class="icon-remove"></i>                     
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="action-td">
                                            <a href="javascript:;" class="btn btn-small btn-default">
                                                <i class="icon-cog"></i>                                
                                            </a>                        
                                            <a href="javascript:;" class="btn btn-small">
                                                <i class="icon-remove"></i>                     
                                            </a>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>

                        </div> <!-- /widget-content -->
@stop


