@extends('dashboard')
@section('main')
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td><strong>Patients ID</strong></td>
			<td><strong>First Name</strong></td>
			<td><strong>Middle Name</strong></td>
			<td><strong>Last Name</strong></td>
			<td><strong>Address</strong></td>
			<td><strong>Contacts</strong></td>
			<td><strong>Actions</strong></td>
		</tr>
	</thead>
	<tbody>
	@foreach($patients as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->f_name }}</td>
			<td>{{ $value->m_name }}</td>
			<td>{{ $value->l_name }}</td>
			<td>{{ $value->address }}</td>
			<td>{{ $value->contacts }}</td>
			<!-- we will also add show, edit, and delete buttons -->
			<td>
				<!-- show the nerd (uses the show method found at GET /patients/{id} -->
				<div class = "col-xs-3"><a class="btn btn-small btn-success btn-sm " href="{{ URL::to('patients/' . $value->id) }}">Show</a>
				</div>
				<!-- edit this nerd (uses the edit method found at GET /patients/{id}/edit -->
				<div class = "col-xs-3">
				<a class="btn btn-small btn-info btn-sm " href="{{ URL::to('patients/' . $value->id . '/edit') }}">Edit</a>
				</div>
				<!-- delete the user (uses the destroy method DESTROY /patients/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->
				<div class = "col-xs-3">
				{{Form::open(array('url' => 'patients/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete', array('class' => 'btn btn-warning btn-sm  ')) }}
				{{ Form::close() }}
				</div>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop