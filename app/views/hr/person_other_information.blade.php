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

                	<form id="contactform" action="{{URL::to('person/edit1/' . $person->id )}}" method="POST">
                		<div class="span4 pull-left">
                         <h4>{{$person->firstname}}</h4>
                			<h4>Personal Contact Information</h4>
	                		<div class="control-group">
								<label class="control-label" for="mobilephone">Mobile Phone Number*</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" name="mobilephone"   required value={{$person->mobile_phone}}>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="telephone">Telephone Number</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" name="telephone" value={{$person->telephone}}>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="email">Email Address</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" name="email" value={{$person->email}}>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="faxnumber">Fax Number</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id=""  name="faxnumber" value={{$person->fax}}>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="mailing">Mailing Address</label>
								<div class="controls">
								<textarea rows="3" name="mailing" class="input-xlarge" >{{$person->mailing_address}}</textarea>
								</div>
							</div>
               			</div>
               			<div class="span4 pull-right">

               				<h4>Work Contact Information</h4>	
               				<div class="control-group">
								<label class="control-label" for="mobilephone">Mobile Phone Number*</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" name="offcmobilephone" required value={{$person->offc_mobile_phone}}>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="telephone">Telephone Number</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" name="offctelephone" value={{$person->offc_telephone}}>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="email">Email Address</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" name="offcemail" value={{$person->offc_email}}>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="faxnumber">Fax Number</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" value="" name="offcfaxnumber" value={{$person->offc_fax}}>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="mailing">Mailing Address</label>
								<div class="controls">
								<textarea rows="3" name="offcmailing" class="input-xlarge">{{$person->offc_mailing_address}}</textarea>
								</div>
							</div>
							<button type="reset" class="btn">Reset</button>
							<button type="submit" class="btn">Add</button>
               			</div>
                	</form>
              </div>
              <div class="tab-pane fade" id="nextofkin">
                <form id="nextofkinform" action="{{URL::to('person/edit2/' . $person->id )}}" method="POST">
                		<div class="span4 pull-left">
                			<h4>Next of Kin Information</h4>
	                		<div class="control-group">
								<label class="control-label" for="name">Name*</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id=""  name="name" required value={{$person->next_kn_name}}>
								</div>
							</div>
							<div class="control-group">
		                		<label class="control-label" for="relationship">Relationship*</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="Relationship" required>
							            <option disabled>Select Relationship</option>
							            <option>{{$person->next_kn_name}}</option>
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
								<input type="text" class="input-xlarge " id="" name="email" value={{$person->next_kn_email}} >
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="mailing">Mailing Address</label>
								<div class="controls">
								<textarea rows="3" name="mailing" class="input-xlarge">{{$person->next_kn_mailing}} </textarea>
								</div>
							</div>
               			</div>
               			<div class="span4 pull-right">
               				<h4><br></h4>
               				<div class="control-group">
								<label class="control-label" for="mobilephone">Mobile Phone Number*</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" name="mobilephone" required value={{$person->next_kn_mob_no}}>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="telephone">Telephone Number</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id=""  name="telephone" value={{$person->next_kn_tel_no}}>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="faxnumber">Fax Number</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id=""  name="faxnumber" value={{$person->next_kn_fax_no}}>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="notes">Notes</label>
								<div class="controls">
								<textarea rows="3" name="faxnumber" class="input-xlarge">{{$person->next_kn_notes}}</textarea>
								</div>
							</div>
							<button type="reset" class="btn">Reset</button>
							<button type="submit" class="btn">Add</button>
               			</div>
                	</form>
              </div>
              <div class="tab-pane fade" id="uploadfile">                
	                <form id="position_form" action="{{URL::to('person/edit4/' . $person->id )}}" method="POST">
	                	<div class="span4 pull-left">
	                		<div class="control-group">
		                		<label class="control-label" for="position">Position*</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="position" required/>
							            <option disabled>Select Position</option>
                                    <?php $position = Position::all(); ?>
                                      @foreach($position as $position)
							           <option value={{$position->id}}>{{$position->name}}</option>
							            @endforeach
							        </select>
							    </div>
							</div>
							<div class="control-group">
							    <label class="control-label" for="date_start">Date of first appointment*</label>
							    <div class="controls">

								<input type="text" class="input-xlarge" id="appointment_date" value=""  name="date_start" required  placeholder=" "/>
							    </div>          
						    </div>
						    <div class="control-group">
							    <label class="control-label" for="date_end">End Date*</label>
							    <div class="controls">
								<input type="text" class="input-xlarge" id="appointment_date" value=""  name="date_end" required  placeholder=" "/>
							    </div>          
						    </div>
	                	</div>
	                	<div class="span4 pull-right">
	                		<div class="control-group">
		                		<label class="control-label" for="employ_type">Type of Employmnet*</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="employ_type" required/>
							            <option disabled>Select Employment Type</option>
							            <option></option>
							            <option>Contract</option>
							            <option>Permanent</option>
							            <option>Volunteer</option>
							        </select>
							    </div>
							</div>
	                		<div class="control-group">
		                		<label class="control-label" for="employ_status">Employmnet Status*</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="employ_status" required/>
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
                	<form id="qualification_form" action="{{URL::to('person/edit3/' . $person->id )}}" method="POST">
	                	<div class="span4 pull-left">
	                		<div class="control-group">
		                		<label class="control-label" for="basic_edu">Basic Education Level*</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="basic_edu" required/>
							            <option disabled>Select Level</option>
							            <option>{{$person->basic_edu}}</option>
							            <option>Primary</option>
							            <option>Ordinary</option>
							            <option>Advanced</option>
							        </select>
							    </div>
							</div>
							<div class="control-group">
		                		<label class="control-label" for="profession">Profession Education Level</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="profession"/>
							            <option disabled>Select Level</option>
							            <option>{{$person->profession}}</option>
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