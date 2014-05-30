@extends('dashboard')
@section('main')
<h1 class="page-title"><i class="icon-th-large"></i>Person Other Informations</h1>
<div class="widget-content">
	<div class="bs-docs-example">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#contact" data-toggle="tab">Contact Information</a></li>
              <li><a href="#nextofkin" data-toggle="tab">Next of Kin Information</a></li>
              <li><a href="#position" data-toggle="tab">Qualification Information</a></li>
              <li><a href="#uploadfile" data-toggle="tab">Position Information</a></li>              
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
							        <select class="form-control input-xlarge" name="Relationship" required/>
							            <option disabled>Select Relationship</option>
							            <option></option>
							            <option>Mother</option>
							            <option>Father</option>
							            <option>Sister</option>
							            <option>Brother</option>
							            <option>Uncle</option>
							            <option>Aunt</option>
							            <option>In law</option>
							            <option>Guardian</option>
							        </select>
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
              <div class="tab-pane fade" id="uploadfile">                
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
							    </div>
							</div>
							<div class="control-group">
							    <label class="control-label" for="Date">Date of first appointment*</label>
							    <div class="controls">
								<input type="text" class="input-xlarge" id="appointment_date" value=""  name="date" required  placeholder=" "/>
							    </div>          
						    </div>
						    <div class="control-group">
							    <label class="control-label" for="Date">End Date*</label>
							    <div class="controls">
								<input type="text" class="input-xlarge" id="appointment_date" value=""  name="date" required  placeholder=" "/>
							    </div>          
						    </div>
	                	</div>
	                	<div class="span4 pull-right">
	                		<div class="control-group">
		                		<label class="control-label" for="username">Type of Employmnet*</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="action" required/>
							            <option disabled>Select Employment Type</option>
							            <option></option>
							            <option>Contract</option>
							            <option>Permanent</option>
							            <option>Volunteer</option>
							        </select>
							    </div>
							</div>
	                		<div class="control-group">
		                		<label class="control-label" for="username">Employmnet Status*</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="action" required/>
							            <option disabled>Select Status</option>
							            <option></option>
							            <option>On leave</option>
							            <option>Training</option>
							            <option>Maternity Leave</option>
							        </select>
							    </div>
							</div>
							<button type="reset" class="btn">Reset</button>
							<button type="submit" class="btn">Add</button>
	                	</div>
	                </form>
              </div>
              <div class="tab-pane fade" id="position">
                	<form id="qualification_form" action="" method="POST">
	                	<div class="span4 pull-left">
	                		<div class="control-group">
		                		<label class="control-label" for="username">Basic Education Level*</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="action" required/>
							            <option disabled>Select Level</option>
							            <option></option>
							            <option>Primary</option>
							            <option>Ordinary</option>
							            <option>Advanced</option>
							        </select>
							    </div>
							</div>
							<div class="control-group">
		                		<label class="control-label" for="username">Profession Education Level</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="action"/>
							            <option disabled>Select Level</option>
							            <option></option>
							            <option>Certificate</option>
							            <option>Diploma</option>
							            <option>Bachelor</option>
							            <option>Masters</option>
							            <option>Postgraduate</option>
							            <option>PhD</option>
							        </select>
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