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
    $('#patients_table').dataTable({
        ordering:false,
        "jQueryUI": false
    });
</script>
@stop

@section('main')

<h1 class="page-title">
    <i class="icon-th-large"></i>
    Manage Employees
</h1>
<div class="row">
    <div class="span9">
        <div class="widget-content">


            <div class="widget-table">
                @if(isset($message))
                <div class="alert alert-info" id="message">{{ $message }}</div>
                @endif
                <div class="widget-content" style="padding:10px;">
                    <table id="patients_table" class="table table-striped table-bordered" cellpadding="0" cellspacing="0" border="0">
                        <thead>
                        <tr>
                            <th style="text-align:center;">#</th>
                            <th style="text-align:center;">First Name</th>
                            <th style="text-align:center;">Surame</th>
                            <th style="text-align:center;">Office Telephone Number</th>
                            <th style="text-align: center">Operations</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $person = Persons::all(); $id=1;?>
                        @foreach($person as $person)
                        <tr><td style="text-align:center;">{{$id}}<?php $id++; ?></td>
                            <td style="text-align:center;">{{$person->firstname}}</td>
                            <td style="text-align:center;">{{$person->surname}}</td>
                            <td style="text-align:center;">{{$person->offc_telephone}}</td>
                            <td style="text-align:center;">
                                <a  href="{{url("person/edit/$person->id")}}"
                                rel="tooltip" class="btn btn-small fetchuser" data-original-title="edit"  data-toggle="modal">
                                <i class="icon-edit" ></i>
                                </a>
                                <a href="{{url("print/$person->id")}}"
                                rel="tooltip" data-placement="top" data-original-title="print" class="btn btn-small btn-primary">
                                <i class="icon-print"></i>
                                </a>
                                <a href="{{url("patient/visit/$person->id")}}"
                                rel="tooltip" data-placement="top" data-original-title="new visit" class="btn btn-small btn-success">
                                <i class="icon-exchange"></i>
                                </a>
                            </td>


                        </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>
</div>


@stop

