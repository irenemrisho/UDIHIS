@extends('dashboard')
@section('main')
<h1 class="page-title"><i class="icon-th-large"></i>Person Other Informations</h1>
<div class="widget-content">
	<div class="span6">
		<table class="table table-striped">
			<a href=""><span class="pull-left label">Update</span></a> &nbsp
			<a href=""><span class="label" style="position:absolute">Name History</span></a>
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
              <li><a href="#education" data-toggle="tab">Education Information</a></li>
              <li><a href="#position" data-toggle="tab">Position Information</a></li>              
            </ul>
            <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="contact">
                <div class="span6">
                	<h4>Personal Contacts</h4>
					<table class="table table-striped">
						<a href=""><span class="pull-left label">Update</span></a>
			    		<tr><td>Mobile Phone</td><td>{{$person->mobile_phone}}</td></tr>
			    		<tr><td>Telephone</td><td>{{$person->telephone}}</td></tr>
			    		<tr><td>Email</td><td>{{$person->email}}</td></tr>
			    		<tr><td>Physical Address</td><td>{{$person->mailing_address}}</td></tr>
			    	</table>
				</div>
				<div class="span6">					
				<h4>Work Contacts</h4>
					<table class="table table-striped">
						<a href=""><span class="pull-left label">Update</span></a>
			    		<tr><td>Mobile Phone</td><td>{{$person->offc_mobile_phone}}</td></tr>
			    		<tr><td>Telephone</td><td>{{$person->offc_telephone}}</td></tr>
			    		<tr><td>Email</td><td>{{$person->offc_email}}</td></tr>
			    		<tr><td>Physical Address</td><td>{{$person->offc_mailing_address}}</td></tr>
			    	</table>
				</div>
              </div>
              <div class="tab-pane fade" id="nextofkin">
                <div class="span6">
					<table class="table table-striped">
						<a href=""><span class="pull-left label">Update</span></a> &nbsp
						<a href=""><span class="label" style="position:absolute">Add Next of Kin</span></a>
			    		<tr><td>Name</td><td>{{$person->next_kn_name}}</td></tr>
			    		<tr><td>Relatonship</td><td>{{$person->relationship}}</td></tr>
			    		<tr><td>Mobile Number</td><td>{{$person->next_kn_mob_no}}</td></tr>
			    		<tr><td>Telephone Number</td><td>{{$person->next_kn_tel_no}}</td></tr>
			    		<tr><td>Email</td><td>{{$person->next_kn_email}}</td></tr>
			    		<tr><td>Physical Address</td><td>{{$person->next_kn_mailing}}</td></tr>
			    		<tr><td>Notes</td><td>{{$person->next_kn_notes}}</td></tr>
			    	</table>
				</div>
              </div>
              <div class="tab-pane fade" id="education">                
	                <div class="span6">
					<table class="table table-striped">
						<a href=""><span class="pull-left label">Add Education</span></a>
			    		<tr><td>Institution Name</td><td>{{$person->firstname}}  {{$person->surname}}</td></tr>
			    		<tr><td>Institution Location</td><td>{{$person->gender}}</td></tr>
			    		<tr><td>Year Completed</td><td>{{$person->residence}}</td></tr>
			    		<tr><td>Level</td><td>{{$person->place_of_domicile}}</td></tr>
			    		<tr><td>Major</td><td>{{$person->nationality}}</td></tr>
			    	</table>
				</div>
              </div>
              <div class="tab-pane fade" id="position">
                	<div class="span6">
					<table class="table table-striped">
						<a href=""><span class="pull-left label">Update</span></a> &nbsp
						<a href=""><span class="label" style="position:absolute">Name History</span></a>
			    		<tr><td>Designation</td><td>{{$person->firstname}}  {{$person->surname}}</td></tr>
			    		<tr><td>Section</td><td>{{$person->position_name}}</td></tr>
			    		<tr><td>Date of First Appointment</td><td>{{$person->date_first}}</td></tr>
			    		<tr><td>Type of employment</td><td>{{$person->employ_type}}</td></tr>
			    		<tr><td>Employment Status</td><td>{{$person->employ_status}}</td></tr>
			    		<tr><td>Salary</td><td>{{$person->salary}}</td></tr>
			    	</table>
				</div>
              </div>
            </div>
        </div>
	</div>
@stop