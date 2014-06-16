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
			$('#gtable').dataTable({
				ordering:false,
				info:true
			});
	</script>
@stop

@section('main')
<h1 class="page-title">
<i class="icon-th-large"></i>
Manage users					
</h1>


<div class="row">

<div class="span9">


<div class="widget-header">
<h3>Users</h3>
</div> <!-- /widget-header -->

<div class="widget-content" style="padding:10px">

		<table class="table table-striped table-bordered" id="gtable">
		   <?php	$users = User::orderBy('id', 'DESC')->get();
				?>
			
			<thead>
				<tr>
					<th>#</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Designation</th>
					<th>Status</th>
					<th>Last Updated</th>
					<th>operation</th>
				</tr>
			</thead>
			
			<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->first_name}}</td>
					<td>{{$user->last_name}} </td>
					<td>{{User::level($user->level)}}</td>
					<td>{{$user->status}}</td>
					<td>{{User::ago($user->updated_at)}}</td>
                    <td style="text-align:center;">
                        <a  href="{{url("add_user/".Crypt::encrypt($user->id))}}"
                        rel="tooltip" class="btn btn-small " data-original-title="Add user"  data-toggle="modal">
                        <i class="icon-user" ></i>
                        </a>
                        <a  href="{{url("person/more_info/".Crypt::encrypt($user->id))}}"
                        rel="tooltip" class="btn btn-small btn-danger" data-original-title="Remove user"  data-toggle="modal">
                        <i class="icon-trash" ></i>
                        </a>
                    </td>
				</tr>
				@endforeach
			</tbody>
		</table>
</div>
</div>	
</div>
@stop