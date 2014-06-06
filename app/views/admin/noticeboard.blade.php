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
<h1 class="page-title"><i class="icon-info-sign"></i>Manage Noticeboard</h1>	
<div class="widget-content">
   	<div class="bs-docs-example">
   		<ul id="myTab" class="nav nav-tabs">
            <li class="active"><a href="#list" data-toggle="tab">Noticeboard List</a></li>
            <li><a href="#new" data-toggle="tab">Add Noticeboard</a></li>              
        </ul>

        <div id="myTabContent" class="tab-content">
        	<div class="tab-pane fadein active" id="list">
        		<div class="widget-content" style="padding:10px;">
					<table id="notification_table" class="table table-striped table-bordered" cellpadding="0" cellspacing="0" border="0">
					<thead>
					<tr>
					<th style="text-align:center;">#</th>
					<th style="text-align:center;">Title</th>
					<th style="text-align:center;">Message</th>
					<th style="text-align:center;">Day</th>
					<th style="text-align: center">Operations</th>
					</tr>
					</thead>
					<tbody>
					<?php $notification = Notification::orderBy('id', 'DESC')->get(); $id=1;?>
					@foreach($notification as $notification)
					<tr>
					<td style="text-align:center;">{{$id}}<?php $id++; ?></td>
					<td style="text-align:center;">{{$notification->title}}</td>
					<td style="text-align:center;">{{$notification->message}}</td>
					<td style="text-align:center;">{{$notification->date}}</td>
					<td style="text-align:center;">
					<a  href="{{url("$notification->id")}}" 
					rel="tooltip" class="btn btn-small fetchuser" data-original-title="edit"  data-toggle="modal">
					<i class="icon-edit" ></i>								
					</a>
					<a href="{{url("$notification->id")}}" 
						rel="tooltip" data-placement="top" data-original-title="delete" class="btn btn-small btn-danger">
							<i class="icon-trash"></i>
					</a>
					</td>
					</tr>
					@endforeach

					</tbody>
					</table>

					</div>	
        	</div>

        	<div class="tab-pane fadein" id="new">
        		<form id="" method="POST" action="{{URL::to('notification/add')}}">
        			<div class="control-group">
						<label class="control-label" for="title">Title*</label>
						<div class="controls">
						<input type="text" class="input-xlarge " id="" name="title" value="" required />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="message">Message*</label>
						<div class="controls">
						<input type="text" class="input-xlarge " id="" name="message" value="" required />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="date">Date*</label>
						<div class="controls">
						<input type="text" class="input-xlarge" id="appointment_date" value=""  name="date" required />
						</div>          
					</div>
					<button type="submit" class="btn btn-primary">Add</button>
        		</form>
        	</div>
        </div>
   	</div>
</div>




@stop