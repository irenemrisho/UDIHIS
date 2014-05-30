@extends('dashboard')
@section('main')
<h1 class="page-title"><i class="icon-th-large"></i>Person Other Informations</h1>
<div class="widget-content">
	<div class="bs-docs-example">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#contact" data-toggle="tab">Contact Information</a></li>
              <li><a href="#nextofkin" data-toggle="tab">Next of Kin Information</a></li>
              <li><a href="#position" data-toggle="tab">Position Information</a></li>
              <li><a href="#disciplinary" data-toggle="tab">Current Disciplinary Actions</a></li>              
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="contact">                
                	<form id="contactform" action="" method="POST">
                		<div class="span4 pull-left">
                			<h4>Personal Contact Information</h4>
	                		<div class="control-group">
								<label class="control-label" for="mobilephone">Mobile Phone Number*</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" value="" name="mobilephone" required/>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="telephone">Telephone Number</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" value="" name="telephone" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="email">Email Address</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" value="" name="email" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="faxnumber">Fax Number</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" value="" name="faxnumber" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="mailing">Mailing Address</label>
								<div class="controls">
								<textarea rows="3" name="mailing" class="input-xlarge"></textarea>
								</div>
							</div>
               			</div>
               			<div class="span4 pull-right">
               				<h4>Work Contact Information</h4>	
               				<div class="control-group">
								<label class="control-label" for="mobilephone">Mobile Phone Number*</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" value="" name="mobilephone" required/>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="telephone">Telephone Number</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" value="" name="telephone" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="email">Email Address</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" value="" name="email" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="faxnumber">Fax Number</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" value="" name="faxnumber" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="mailing">Mailing Address</label>
								<div class="controls">
								<textarea rows="3" name="mailing" class="input-xlarge"></textarea>
								</div>
							</div>
							<button type="reset" class="btn">Reset</button>
							<button type="submit" class="btn">Add</button>
               			</div>
                	</form>
              </div>
              <div class="tab-pane fade" id="nextofkin">
                <form id="nextofkinform" action="" method="POST">
                		<div class="span4 pull-left">
                			<h4>Next of Kin Information</h4>
	                		<div class="control-group">
								<label class="control-label" for="name">Name*</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" value="" name="name" required/>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="relationship">Relationship*</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" value="" name="relationship" required/>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="email">Email Address</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" value="" name="email" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="mailing">Mailing Address</label>
								<div class="controls">
								<textarea rows="3" name="mailing" class="input-xlarge"></textarea>
								</div>
							</div>
               			</div>
               			<div class="span4 pull-right">
               				<h4><br></h4>
               				<div class="control-group">
								<label class="control-label" for="mobilephone">Mobile Phone Number*</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" value="" name="mobilephone" required/>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="telephone">Telephone Number</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" value="" name="telephone" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="faxnumber">Fax Number</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" value="" name="faxnumber" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="notes">Notes</label>
								<div class="controls">
								<textarea rows="3" name="notes" class="input-xlarge"></textarea>
								</div>
							</div>
							<button type="reset" class="btn">Reset</button>
							<button type="submit" class="btn">Add</button>
               			</div>
                	</form>
              </div>
              <div class="tab-pane fade" id="position">                
	                <form id="position_form" action="" method="POST">
	                	<div class="span4 pull-left">
	                		<div class="control-group">
		                		<label class="control-label" for="username">Position*</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="action" required/>
							            <option disabled>Select Position</option>
							            <option></option>
							            <option>Empty position</option>
							            <option>Empty position</option>
							            <option>None</option>
							        </select>
							    </div> <!-- /controls -->
							</div>
	                	</div>
	                </form>
              </div>
              <div class="tab-pane fade" id="disciplinary">
                	<form id="disciplinaryform" action="" method="POST">
                		<div class="span4 pull-left">
                			<h4>Current Disciplinary actions</h4>
	                		<div class="control-group">
	                			<label class="control-label" for="username">Action Taken*</label>
						        <div class="controls">
						            <select class="form-control input-xlarge" name="action" required/>
						                <option disabled>Select Action</option>
						                <option></option>
						                <option>Dismissal</option>
						                <option>Invalid</option>
						                <option>None</option>
						                <option>Probation</option>
						                <option>Warning</option>
						            </select>
						        </div>
						    </div>
						    <div class="control-group">
	                			<label class="control-label" for="action">Reason for Action*</label>
						        <div class="controls">
						            <select class="form-contro input-xlarge" name="action" required/>
						                <option disabled>Select one</option>
						                <option></option>
						                <option>Assessed Mentally Incompetent</option>
						                <option>Death of Patient</option>
						                <option>Drug-Related</option>
						                <option>Failure to Disclose Criminal Conviction</option>
						                <option>Falsification of Credentials</option>
						                <option>Harm to Public</option>
						                <option>Injury to Patient</option>
						                <option>Insurance Fraud</option>
						                <option>Minor Injury of Patient</option>
						                <option>Permanent Injury of Patient</option>
						                <option>Physical Abuse</option>
						                <option>Practicing With Expired License</option>						                
						                <option>Serious Injury of Patient</option>
						                <option>Stealing</option>
						                <option>Verbal Abuse</option>
						            </select>
						        </div>
						    </div>
							<div class="control-group">
								<label class="control-label" for="actionstart">Start of Action*</label>
								<div class="controls">
								<input type="text" class="input-xlarge" id="birthdate" value=""  name="actionstart" required/>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="actionend">End of Action*</label>
								<div class="controls">
								<input type="text" class="input-xlarge" id="appointment_date" value=""  name="actionend" required/>
								</div>
							</div>
               			</div>
               			<div class="span4 pull-right">
               				<h4><br></h4>
               				<div class="control-group">
								<label class="control-label" for="discussiondate">Date of Discussion*</label>
								<div class="controls">
								<input type="text" class="input-xlarge" id="appointment_date" value=""  name="discussiondate" required/>
								</div>
							</div><div class="control-group">
								<label class="control-label" for="people_present">People Present</label>
								<div class="controls">
								<textarea rows="3" name="people_present" class="input-xlarge"></textarea>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="notes">Notes</label>
								<div class="controls">
								<textarea rows="3" name="notes" class="input-xlarge"></textarea>
								</div>
							</div>
							<button type="reset" class="btn">Reset</button>
							<button type="submit" class="btn">Add</button>
               			</div>
                	</form>
              	</div>
            </div>
          </div>

</div>
@stop