@extends('dashboard')
@section('main')
<h1 class="page-title"><i class="icon-th-large"></i>Person Other Informations</h1>
<div class="widget-content">
	<div class="span6">
		<table class="table table-striped">
    		<tr><td>Full Name</td><td>{{$person->first_name}}  {{$person->last_name}}</td></tr>
    		<tr><td>Gender</td><td>{{$person->gender}}</td></tr>
    		<tr><td>Designation</td><td>{{$person->level}}</td></tr>
    		<tr><td>Facility</td><td>{{$person->department}}</td></tr>
    		<tr><td>Email</td><td>{{$person->email}}</td></tr>
    	</table>
	</div>
	<div class="span2">
			@if($person->photo=="")
			{{HTML::image("http://placehold.it/150x120","", array('class'=>'img-rounded'))}}
			@else
    		{{HTML::image("uploads/hr/{$person->photo}","",array('class'=>'img-rounded thumbnail', 'style'=>'height:150px;width:120px'))}}
    		@endif
	</div>
</div>

<div class="widget-content">
	<form id="add_system_user_form" action="{{url("System_user/{$person->id}")}}" method="POST">
		<div class="span4 pull-left">
            <div class="control-group">
				<label class="control-label" for="username">Username*</label>
				<div class="controls">
				<input type="text" class="input-xlarge " id="" name="username" required value={{$person->username}}>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="password">Password*</label>
				<div class="controls">
				<input type="password" class="input-xlarge " id="" name="password" required value={{$person->password}}>
				</div>
			</div>
			<button type="reset" class="btn">Cancel</button>
			<button type="submit" class="btn">Add User</button>
        </div>
	</form>
</div>
@stop