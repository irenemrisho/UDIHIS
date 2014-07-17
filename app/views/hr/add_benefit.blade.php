@extends('dashboard')
@section('main')
<h1 class="page-title"><i class="icon-th-large"></i>Add Special Payments</h1>	
		@if(Session::has('message'))
			<div class="alert alert-success" style="text-align: center">{{Session::get('message')}}</div>
		@elseif($errors->any())
		    {{implode('',$errors->all('<div class="alert alert-danger" style="text-align: center">:message</div>'))}}	
		@endif    
	<div class="widget-content">
		<form id="addnextofkinform" action="{{URL::to('person/edit3/' . $person->id )}}" method="POST">
        	<div class="span4 pull-left">
							<div class="control-group">
		                		<label class="control-label" for="benefit">Type of Benefit*</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="benefit">
							            <option disabled>Select benefit</option>
							            <option></option>							            
							            <option>Allowance</option>
							            <option>Bonus</option>
							            <option>Expenses</option>
							            <option>Travel</option>
							        </select>
							    </div>
							</div>
							<div class="control-group">
		                		<label class="control-label" for="source">Source*</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="source">
							            <option disabled>Select source</option>							            
							            <option></option>
							            <option>NGO's</option>
							            <option>University</option>
							            <option>Ministry of Health</option>
							            <option>Association</option>
							        </select>
							    </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="amount">Amount (TSH)</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" name="amount" value="" />
								</div>
							</div>
	                	</div>
	                	<div class="span4 pull-right">
	                		<div class="control-group">
							    <label class="control-label" for="start">Start date*</label>
							    <div class="controls">
								<input type="text" class="input-xlarge" id="appointment_date" value=""  name="start" required  placeholder=" "/>
							    </div>          
						    </div>
						    <div class="control-group">
							    <label class="control-label" for="end">End date*</label>
							    <div class="controls">
								<input type="text" class="input-xlarge" id="appointment_date" value=""  name="end" required  placeholder=" "/>
							    </div>          
						    </div>
						    <br>
							<button type="reset" class="btn">Reset</button>
							<button type="submit" class="btn">Add</button>
	                	</div>
        </form>
    </div>
@stop