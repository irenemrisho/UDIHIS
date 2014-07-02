@extends('dashboard')

@section('main')
<h1 class="page-title"><i class="icon-th-large"></i>Update Person</h1>
<div class="widget-content">
	
		<form id="updateform" action="{{url('person/update/'. $person->id)}}" method="POST" enctype="multipart/form-data">
			<div class="span4 pull-left" >
				<h4>Personal Information </h4>
				<div class="control-group">
					<label class="control-label" for="firstname">First Name</label>
					<div class="controls">
					<input type="text" class="input-xlarge " id="" value="{{$person->first_name}}" name="firstname" />
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="surname">Surname</label>
					<div class="controls">
					<input type="text" class="input-xlarge " id="" value="{{$person->last_name}}" name="surname" />
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="othernames">Other Names</label>
					<div class="controls">
					<input type="text" class="input-xlarge " id="" value="{{$person->middle_name}}" name="othernames"/>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="nationality">Nationality</label>
					<div class="controls">
					<select class="form-control input-xlarge"  data-placement="nationality" name="nationality"  value = "{{$person->nationality}}">
					<option disabled> Select Nationality</option>
					 <option>{{$person->nationality}}</option
					<option value='US'>American</option>
					<option value='AO'>Angolan</option>
					<option value='AR'>Argentinian</option>
					<option value='AU'>Australian</option>
					<option value='AT'>Austrian</option>
					<option value='BD'>Bangladeshi</option>
					<option value='BY'>Belarusian</option>
					<option value='BE'>Belgian</option>
					<option value='BO'>Bolivian</option>
					<option value='BW'>Botswanan</option>
					<option value='BR'>Brazilian</option>
					<option value='BG'>Bulgarian</option>
					<option value='BI'>Burundian</option>
					<option value='KH'>Cambodian</option>
					<option value='CM'>Cameroonian</option>
					<option value='GA'>Gabonese</option>
					<option value='GM'>Gambian</option>
					<option value='GE'>Georgian</option>
					<option value='DE'>German</option>
					<option value='GH'>Ghanaian</option>
					<option value='GI'>Gibraltarian</option>
					<option value='GR'>Greek</option>
					<option value='GL'>Greenlander</option>
					<option value='GD'>Grenadian</option>
					<option value='GP'>Guadeloupean</option>
					<option value='GU'>Guamanian</option>
					<option value='GT'>Guatemalan</option>
					<option value='GF'>Guianese</option>
					<option value='GW'>Guinea-Bissau national</option>
					<option value='GN'>Guinean</option>
					<option value='GY'>Guyanese</option>
					<option value='HT'>Haitian</option>
					<option value='HM'>Heard Island and McDonald Islands</option>
					<option value='HN'>Honduran</option>
					<option value='HK'>Hong Kong Chinese</option>
					<option value='HU'>Hungarian</option>
					<option value='IS'>Icelander</option>
					<option value='IN'>Indian</option>
					<option value='ID'>Indonesian</option>
					<option value='IR'>Iranian</option>
					<option value='IQ'>Iraqi</option>
					<option value='IE'>Irish</option>
					<option value='IL'>Israeli</option>
					<option value='IT'>Italian</option>
					<option value='CI'>Ivorian</option>
					<option value='JM'>Jamaican</option>
					<option value='JP'>Japanese</option>
					<option value='KE'>Kenyan</option>
					<option value='LR'>Liberian</option>
					<option value='LY'>Libyan</option>
					<option value='MW'>Malawian</option>
					<option value='MZ'>Mozambican</option>
					<option value='NA'>Namibian</option>
					<option value='NR'>Nauruan</option>
					<option value='NP'>Nepalese</option>
					<option value='NL'>Netherlander</option>
					<option value='NC'>New Caledonian</option>
					<option value='NZ'>New Zealander</option>
					<option value='NI'>Nicaraguan</option>
					<option value='NG'>Nigerian</option>
					<option value='NE'>Nigerien</option>
					<option value='NU'>Niuean</option>
					<option value='NF'>Norfolk Islander</option>
					<option value='KP'>North Korean</option>
					<option value='MP'>Northern Mariana Islander</option>
					<option value='NO'>Norwegian</option>
					<option value='PT'>Portuguese</option>
					<option value='PR'>Puerto Rican</option>
					<option value='RO'>Romanian</option>
					<option value='RU'>Russian</option>
					<option value='RW'>Rwandan</option>
					<option value='SO'>Somali</option>
					<option value='ZA'>South African</option>
					<option value='LK'>Sri Lankan</option>
					<option value='SD'>Sudanese</option>
					<option value='SZ'>Swazi</option>
					<option value='SE'>Swede</option>
					<option value='CH'>Swiss</option>
					<option value='SY'>Syrian</option>
					<option value='TZ'>Tanzanian</option>
					<option value='TG'>Togolese</option>
					<option value='TT'>Trinidad and Tobago national</option>
					<option value='TN'>Tunisian</option>
					<option value='TV'>Tuvaluan</option>
					<option value='UG'>Ugandan</option>
					<option value='UA'>Ukrainian</option>
					<option value='UY'>Uruguayan</option>
					<option value='YE'>Yemeni</option>
					<option value='ZM'>Zambian</option>
					<option value='ZW'>Zimbabwean</option>
					</select>
					</div>  
				</div>

				<div class="control-group">
					<label class="control-label" for="residence">Residence</label>
					<div class="controls">
					<input type="text" class="input-xlarge " id="" value="{{$person->residence}}" name="residence" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="domicide">Place of Domicele</label>
					<div class="controls">
					<input type="text" class="input-xlarge " id="" value="{{$person->place_of_domicile}}" name="domicide" />
					</div>
				</div>
			</div>

			<div class="span4 pull-right">
				<h4>Demographic Information</h4>
				<div class="control-group">
					<label class="control-label" for="birthdate">Date of Birth</label>
					<div class="controls">
					<input type="text" class="input-xlarge" id="birthdate" value="{{$person->date_of_birth}}"  name="birthdate" />
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="gender">Gender</label>
					<div class="controls">
						<select class="form-control input-xlarge"  data-placement="gender" name="gender" value="{{$person->gender}}" />
							<option disabled> Select Gender</option>
							<option>{{$person->gender}}</option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</div> 
				</div>
				<div class="control-group">
					<label class="control-label" for="marital_status">Marital Status</label>
					<div class="controls">
						<select class="form-control input-xlarge"  data-placement="marital_status" name="marital_status"  value = "{{$person->marital_status}}" />
							<option disabled> Select Marital Status</option>
							<option>{{$person->marital_status}}</option>
							<option>Single</option>
							<option>Married</option>
							<option>Separated</option>
							<option>Divorced</option>
							<option>Widowed</option>
						</select>
					</div>  
				</div>
				<div class="control-group">
					<label class="control-label" for="physical_disability">Physical Disability</label>
					<div class="controls">
						<select class="form-control input-xlarge"  data-placement="physical_disability" name="physical_disability"  value = "{{$person->physical_disability}}" />
							<option disabled> Select Disability</option>
							<option>{{$person->disability}}</option>
							<option>None</option>
							<option>Hearing</option>
							<option>Physical</option>
							<option>Visual</option>
							<option>Albinism</option>
							<option>Others</option>
						</select>
					</div>  
				</div>
				<div class="control-group">
					<label class="control-label" for="no_of_dependancy">Number of Dependancies</label>
					<div class="controls">
					<input type="text" class="input-xlarge " id="" value="{{$person->number_of_dependence}}" name="no_of_dependancy"/>
					</div>
				</div>
				<div style="position:relative;">
					Image{{Form::file('img',array('class'=>'')) }}
				</div>
				<br>
				<button type="reset" class="btn">Cancel</button>
				<button type="submit" class="btn">Upadate</button>
			</div>
		</form>
	</div>
@stop