@extends('dashboard')
@section('main')
<h1 class="page-title"><i class="icon-th-large"></i>Add Disciplinary action</h1>	
		@if(Session::has('message'))
			<div class="alert alert-success" style="text-align: center">{{Session::get('message')}}</div>
		@elseif($errors->any())
		    {{implode('',$errors->all('<div class="alert alert-danger" style="text-align: center">:message</div>'))}}	
		@endif    
	<div class="widget-content">
		<form id="addnextofkinform" action="{{URL::to('person/discipline/' . $person->id )}}" method="POST">
        	<div class="span4 pull-left">
				<div class="control-group">
		        	<label class="control-label" for="action">Action*</label>
						<div class="controls">
						    <select class="form-control input-xlarge" name="action">
						        <option disabled>Select action</option>
						        <option></option>							            
						        <option>Dismissal</option>
						        <option>Probation</option>
						        <option>Warning</option>
						     </select>
						</div>
				</div>
				<div class="control-group">
		           	<label class="control-label" for="benefit">Reason*</label>
					    <div class="controls">
					       <select class="form-control input-xlarge" name="reason">
					            <option disabled>Select source</option>							            
					            <option></option>
					            <option>Drug Related</option>
					            <option>Death of Patient</option>
					            <option>Harm to public</option>
					            <option>Injury to patient</option>
					            <option>Physical Abuse</option>
					            <option>Verbal Abuse</option>
					            <option>Stealing</option>
					            <option>Practicing with Expired licence</option>
					        </select>
					    </div>
				</div>
	                		<div class="control-group">
							    <label class="control-label" for="action_date">Start*</label>
							    <div class="controls">
								<input type="text" class="input-xlarge picker" id="appointment_date" value=""  name="start_date" required  placeholder=""/>
							    </div>          
						    </div>
	                	</div>
               			<div class="span4 pull-right">
	                		<div class="control-group">
							    <label class="control-label" for="action_date">End </label>
							    <div class="controls">
								<input type="text" class="input-xlarge picker" id="appointment_date" value=""  name="end_date" placeholder=""/>
							    </div>          
						    </div>
	                		<div class="control-group">
							    <label class="control-label" for="disc_date">Date of Discussion</label>
							    <div class="controls">
								<input type="text" class="input-xlarge" id="appointment_date" value=""  name="disc_date" required  placeholder=" "/>
							    </div>          
						    </div>
							<div class="control-group">
								<label class="control-label" for="notes">People involved</label>
								<div class="controls">
								<textarea rows="3" name="people" class="input-xlarge">{{$person->next_kn_notes}}</textarea>
								</div>
							</div>
							<button type="reset" class="btn">Reset</button>
							<button type="submit" class="btn">Add</button>
               			</div>
        </form>
    </div>
@stop