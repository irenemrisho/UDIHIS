@extends('dashboard')
@section('main')
<h1 class="page-title"><i class="icon-th-large"></i>Person Other Informations</h1>
<div class="widget-content">
	<div class="span6">
		<table class="table table-striped">
    		<tr><td>Full Name</td><td>{{$person->firstname}}  {{$person->surname}}</td></tr>
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
              <li class="active"><a href="#contact" data-toggle="tab">Contact Information</a></li>
              <li><a href="#nextofkin" data-toggle="tab">Next of Kin Information</a></li>
              <li><a href="#position" data-toggle="tab">Education Information</a></li>
              <li><a href="#uploadfile" data-toggle="tab">Position Information</a></li>              
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="contact">

                	<form id="contactform" action="{{URL::to('person/edit1/' . $person->id )}}" method="POST">
                		<div class="span4 pull-left">                        
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
								<label class="control-label" for="mailing">Physical Address</label>
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
								<label class="control-label" for="mailing">Phisical Address</label>
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
							            <option>Sibling</option>
							            <option>Wife</option>
							            <option>Husband</option>
							            <option>Uncle</option>
							            <option>Aunt</option>
							            <option>Nice</option>
							            <option>Nephew</option>
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
								<label class="control-label" for="mailing">Physical Address</label>
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
								<label class="control-label" for="notes">Notes</label>
								<div class="controls">
								<textarea rows="3" name="faxnumber" class="input-xlarge">{{$person->next_kn_notes}}</textarea>
								</div>
							</div>
							<br>
							<button type="reset" class="btn">Reset</button>
							<button type="submit" class="btn">Add</button>
               			</div>
                	</form>
              </div>
              <div class="tab-pane fade" id="uploadfile">                
	                <form id="position_form" action="{{URL::to('person/edit4/' . $person->id )}}" method="POST">
	                	<div class="span4 pull-left">
	                		<div class="control-group">
		                		<label class="control-label" for="position">Designation*</label>
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
		                		<label class="control-label" for="position">Section*</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="position" required/>
							            <option disabled>Select Section</option>
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
	                	</div>
	                	<div class="span4 pull-right">
	                		<div class="control-group">
		                		<label class="control-label" for="employ_type">Type of Employmnet*</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="employ_type" required/>
							            <option disabled>Select Employment Type</option>
							            <option></option>
							            <option>Contract</option>
							            <option>Intenship</option>
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
							            <option>Training</option>
							            <option>Suspended</option>
							            <option>Diceased</option>
							            <option>Partenial leave</option>
							            <option>Maternity Leave</option>
							        </select>
							    </div>
							</div>
							<div class="control-group">
								<label class="control-label" for="salary">Salary*</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" name="salary" value="" >
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
	                		<h4>Institution Information</h4>
	                		<div class="control-group">
								<label class="control-label" for="institution">Institution Name*</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" name="institution" value={{$person->next_kn_email}} >
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="institution_loc">Institution Location*</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" name="institution_loc" value={{$person->next_kn_email}} >
								</div>
							</div>
							<div class="control-group">
		                		<label class="control-label" for="profession">Year Completed</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="profession"/>
							            <option disabled>Select Year</option>
							            <option>{{$person->profession}}</option>
							            <option>1990</option>
							            <option>1991</option>
							            <option>1992</option>
							            <option>1993</option>
							            <option>1994</option>
							            <option>1995</option>
							        </select>
							    </div>
							</div>
	                	</div>
	                	<div class="span4 pull-right">
	                		<h4>Level</h4>
	                		<div class="control-group">
		                		<label class="control-label" for="profession">Degree</label>
							    <div class="controls">
							        <select class="form-control input-xlarge" name="profession"/>
							            <option disabled>Select level</option>
							            <option></option>
							            <option>PhD</option>
							            <option>Masters</option>
							            <option>Bachelor</option>
							            <option>Diploma</option>
							            <option>Certificate</option>
							        </select>
							    </div>
							    <div class="control-group">
								<label class="control-label" for="major">Major</label>
								<div class="controls">
								<input type="text" class="input-xlarge " id="" name="major" value={{$person->next_kn_email}} >
								</div>
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