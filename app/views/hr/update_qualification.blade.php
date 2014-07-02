@extends('dashboard')
@section('main')
<h1 class="page-title"><i class="icon-th-large"></i>Update Qualification/Registration</h1>	
		@if(Session::has('message'))
			<div class="alert alert-success" style="text-align: center">{{Session::get('message')}}</div>
		@elseif($errors->any())
		    {{implode('',$errors->all('<div class="alert alert-danger" style="text-align: center">:message</div>'))}}	
		@endif    
	<div class="widget-content">
		<form id="addnextofkinform" action="{{URL::to('person/qualification/' . $person->id )}}" method="POST">
        	<div class="span4 pull-left">
                			<div class="control-group">
		                		<label class="control-label" for="reg_council">Registration Council*</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="reg_council">
							            <option disabled>Select council</option>
							            <option>{{$person->reg_council}}</option>							            
							            <option>Medical and Dental Council</option>
							            <option>Nurse Council</option>
							            <option>Pharmacy Council</option>
							            <option>Other</option>
							        </select>
							    </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="reg_number">Registration Number</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" name="reg_number" value="{{$person->reg_number}}" />
								</div>
							</div>
							<div class="control-group">
							    <label class="control-label" for="reg_date">Registration Date</label>
							    <div class="controls">
								<input type="text" class="input-xlarge" id="appointment_date" value="{{$person->reg_date}}"  name="reg_date" placeholder=" "/>
							    </div>          
						    </div>
               			</div>
               			<div class="span4 pull-right">
               				<div class="control-group">
								<label class="control-label" for="lic_number">Licence Number</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" name="lic_number" value="{{$person->lic_number}}" />
								</div>
							</div>
							<div class="control-group">
							    <label class="control-label" for="reg_date">Expiration Date</label>
							    <div class="controls">
								<input type="text" class="input-xlarge" id="appointment_date" value="{{$person->exp_date}}"  name="exp_date" placeholder=" "/>
							    </div>          
						    </div>
							<br>
							<button type="reset" class="btn">Reset</button>
							<button type="submit" class="btn">Add</button>
               			</div>
        </form>
    </div>
@stop