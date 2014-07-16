@extends('dashboard')
@section('main')
<h1 class="page-title"><i class="icon-th-large"></i>Person Other Informations</h1>
<div class="widget-content">
	<div class="span6">
		<table class="table table-striped">
    		<tr><td>Full Name</td><td>{{$person->first_name}} {{$person->last_name}}</td></tr>
    		<tr><td>Gender</td><td>{{$person->gender}}</td></tr>
    		<tr><td>Residence</td><td>{{$person->residence}}</td></tr>
    		<tr><td>Place of Domicile</td><td>{{$person->place_of_domicile}}</td></tr>
    		<tr><td>Nationality</td><td>{{$person->nationality}}</td></tr>
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
	<div class="bs-docs-example">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#actions" data-toggle="tab">Disciplinary Actions</a></li>
              <li><a href="#qualifications" data-toggle="tab">Qualifications/Registrations</a></li>
              <li><a href="#training" data-toggle="tab">Training</a></li>
              <li><a href="#benefits" data-toggle="tab">Benefits/Special Payments</a></li>              
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="actions">
                	<form id="contactform" action="{{URL::to('person/discipline/' . $person->id )}}" method="POST">
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
		                		<label class="control-label" for="reason">Reason*</label>
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
								<label class="control-label" for="people">People involved</label>
								<div class="controls">
								<textarea rows="3" name="people" class="input-xlarge">{{$person->people}}</textarea>
								</div>
							</div>
							<button type="reset" class="btn">Reset</button>
							<button type="submit" class="btn">Add</button>
               			</div>
                	</form>
              </div>
              <div class="tab-pane fade" id="qualifications">
                <form id="qualificationform" action="{{URL::to('person/edit2/' . $person->id )}}" method="POST">
                		<div class="span4 pull-left">
                			<div class="control-group">
		                		<label class="control-label" for="reg_council">Registration Council*</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="reg_council">
							            <option disabled>Select council</option>
							            <option></option>							            
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
								<input type="text" class="input-xlarge " id="" name="reg_number" value="" />
								</div>
							</div>
							<div class="control-group">
							    <label class="control-label" for="reg_date">Registration Date</label>
							    <div class="controls">
								<input type="text" class="input-xlarge" id="appointment_date" value=""  name="reg_date" placeholder=" "/>
							    </div>          
						    </div>
               			</div>
               			<div class="span4 pull-right">
               				<div class="control-group">
								<label class="control-label" for="lic_number">Licence Number</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" name="lic_number" value="" />
								</div>
							</div>
							<div class="control-group">
							    <label class="control-label" for="reg_date">Expiration Date</label>
							    <div class="controls">
								<input type="text" class="input-xlarge" id="appointment_date" value=""  name="exp_date" placeholder=" "/>
							    </div>          
						    </div>
							<br>
							<button type="reset" class="btn">Reset</button>
							<button type="submit" class="btn">Add</button>
               			</div>
                	</form>
              </div>
              <div class="tab-pane fade" id="training">                
	                <form id="position_form" action="{{URL::to('person/edit4/' . $person->id )}}" method="POST">
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
              <div class="tab-pane fade" id="benefits">
                	<form id="benefit_form" action="{{URL::to('person/edit3/' . $person->id )}}" method="POST">
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
            </div>
        </div>
	</div>
@stop