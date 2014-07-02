@extends('dashboard')
@section('main')
<h1 class="page-title"><i class="icon-th-large"></i>Add Training</h1>	
		@if(Session::has('message'))
			<div class="alert alert-success" style="text-align: center">{{Session::get('message')}}</div>
		@elseif($errors->any())
		    {{implode('',$errors->all('<div class="alert alert-danger" style="text-align: center">:message</div>'))}}	
		@endif    
	<div class="widget-content">
		<form id="addnextofkinform" action="{{URL::to('person/edit4/' . $person->id )}}" method="POST">
        	<div class="span4 pull-left">
							<div class="control-group">
								<label class="control-label" for="course">Course*</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" name="course" value="" required/>
								</div>
							</div>
							<div class="control-group">
							    <label class="control-label" for="date_start">Start Date</label>
							    <div class="controls">
								<input type="text" class="input-xlarge" id="appointment_date" value=""  name="date_start" placeholder=" "/>
							    </div>          
						    </div>
						    <div class="control-group">
								<label class="control-label" for="request">Who request</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" name="request" value="" />
								</div>
							</div>
	                	</div>
	                	<div class="span4 pull-right">
	                		<div class="control-group">
							    <label class="control-label" for="cert_date">Certification Date</label>
							    <div class="controls">
								<input type="text" class="input-xlarge" id="appointment_date" value=""  name="cert_date" placeholder=" "/>
							    </div>          
						    </div>
	                		<div class="control-group">
		                		<label class="control-label" for="status">Status</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="status"/>
							            <option disabled>Select Status</option>
							            <option></option>
							            <option>Completed</option>
							            <option>Inprogress</option>
							            <option>Postponed</option>
							        </select>
							    </div>
							</div>
	                		<div class="control-group">
		                		<label class="control-label" for="evaluation">Evaluation</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="evaluation"/>
							            <option disabled>Select One</option>
							            <option></option>							            
							            <option>Pass</option>
							            <option>Fail</option>
							            <option>Incomplete</option>
							            <option>Not evaluated</option>
							        </select>
							    </div>
							</div>
							<button type="reset" class="btn">Reset</button>
							<button type="submit" class="btn">Add</button>
	                	</div>
        </form>
    </div>
@stop