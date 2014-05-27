@extends('dashboard')
@section('main')
<h1 class="page-title">
					<i class="icon-th-large"></i>
					Register Patient					
</h1>
<div class="widget-content">
<section class="step" data-step-title="Personal Information">
<fieldset >
 @if(isset($error))
<div class="alert alert-danger" id="message">{{ $error }}</div>
@endif	

<div class="span4 pull-left">

<h4>Personal Information </h4>
<form id="pform" action="{{url("patients/add")}}" method="POST">

<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{Input::get('firstname')}}" name="firstname" required  placeholder="First Name"/>

</div> <!-- /controls --> 
</div>


<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{Input::get('lastname')}}" name="lastname" required placeholder="Last Name" />

</div> <!-- /controls -->               
</div> <!-- /control-group -->

<div class="control-group">
<label class="control-label" for="username">Gender</label>
<div class="controls">
<select class="form-control"  data-placement="gender" name="gender" required>
<option disabled> Select Gender</option>
<option></option>
<option>Male</option>
<option>Female</option>
</select>
</div> 
</div> <!-- /control-group -->

<div class="control-group">
 <label class="control-label" for="username">Marital Status</label>
<div class="controls">
<select class="form-control"  data-placement="marital_status" name="marital_status"  value = "">
<option disabled> Select Marital Status</option>
 <option></option>
<option>Single</option>
<option>Married</option>
</select>
</div>  
</div> <!-- /control-group -->

<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge" id="birthdate" value="{{Input::get('birth')}}"  name="birth" required  placeholder=" Date of birth"/>

</div> <!-- /controls --> 
</div><!-- /control-group --> 

<div class="control-group">
<label class="control-label" for="username">Nationality</label>
<div class="controls">
<select class="form-control"  data-placement="nationality" name="nationality"  value = "">
<option disabled> Select Nationality</option>
 <option></option>
<option value='AF'>Afghan</option>
<option value='AL'>Albanian</option>
<option value='DZ'>Algerian</option>
<option value='US'>American</option>
<option value='AS'>American Samoan</option>
<option value='AD'>Andorran</option>
<option value='AO'>Angolan</option>
<option value='AI'>Anguillan</option>
<option value='AQ'>Antarctican</option>
<option value='AG'>Antigua and Barbuda national</option>
<option value='AN'>Antillean</option>
<option value='AR'>Argentinian</option>
<option value='AM'>Armenian</option>
<option value='AW'>Aruban</option>
<option value='AU'>Australian</option>
<option value='AT'>Austrian</option>
<option value='AZ'>Azerbaijani</option>
<option value='BS'>Bahamian</option>
<option value='BH'>Bahraini</option>
<option value='BD'>Bangladeshi</option>
<option value='BB'>Barbadian</option>
<option value='LS'>Basotho</option>
<option value='BY'>Belarusian</option>
<option value='BE'>Belgian</option>
<option value='BZ'>Belizean</option>
<option value='BJ'>Beninese</option>
<option value='BM'>Bermudian</option>
<option value='BT'>Bhutanese</option>
<option value='BO'>Bolivian</option>
<option value='BA'>Bosnia and Herzegovina national</option>
<option value='BW'>Botswanan</option>
<option value='BV'>Bouvet Island</option>
<option value='BR'>Brazilian</option>
<option value='IO'>British Indian Ocean Territory</option>
<option value='VG'>British Virgin Islander</option>
<option value='UK'>Briton</option>
<option value='BN'>Bruneian</option>
<option value='BG'>Bulgarian</option>
<option value='BF'>Burkinabe</option>
<option value='MM'>Burmese</option>
<option value='BI'>Burundian</option>
<option value='KH'>Cambodian</option>
<option value='CM'>Cameroonian</option>
<option value='CA'>Canadian</option>
<option value='CV'>Cape Verdean</option>
<option value='KY'>Caymanian</option>
<option value='CF'>Central African</option>
<option value='TD'>Chadian</option>
<option value='CL'>Chilean</option>
<option value='CN'>Chinese</option>
<option value='CX'>Christmas Islander</option>
<option value='CC'>Cocos Islander</option>
<option value='CO'>Colombian</option>
<option value='KM'>Comorian</option>
<option value='CG'>Congolese</option>
<option value='CD'>Congolese</option>
<option value='CK'>Cook Islander</option>
<option value='CR'>Costa Rican</option>
<option value='HR'>Croat</option>
<option value='CU'>Cuban</option>
<option value='CY'>Cypriot</option>
<option value='CZ'>Czech</option>
<option value='DK'>Dane</option>
<option value='DJ'>Djiboutian</option>
<option value='DO'>Dominican</option>
<option value='DM'>Dominican</option>
<option value='TL'>East Timorese</option>
<option value='EC'>Ecuadorian</option>
<option value='EG'>Egyptian</option>
<option value='AE'>Emirian</option>
<option value='GQ'>Equatorial Guinean</option>
<option value='ER'>Eritrean</option>
<option value='EE'>Estonian</option>
<option value='ET'>Ethiopian</option>
<option value='FO'>Faeroese</option>
<option value='FK'>Falkland Islander</option>
<option value='FJ'>Fiji Islander</option>
<option value='PH'>Filipino</option>
<option value='FI'>Finn</option>
<option value='FR'>French</option>
<option value='TF'>French Southern Territories</option>
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
<option value='JO'>Jordanian</option>
<option value='KZ'>Kazakh</option>
<option value='KE'>Kenyan</option>
<option value='KI'>Kiribatian</option>
<option value='KW'>Kuwaiti</option>
<option value='KG'>Kyrgyz</option>
<option value='LA'>Lao</option>
<option value='LV'>Latvian</option>
<option value='LB'>Lebanese</option>
<option value='LR'>Liberian</option>
<option value='LY'>Libyan</option>
<option value='LI'>Liechtensteiner</option>
<option value='LT'>Lithuanian</option>
<option value='LU'>Luxembourger</option>
<option value='MO'>Macanese</option>
<option value='MK'>Macedonian</option>
<option value='YT'>Mahorais</option>
<option value='MG'>Malagasy</option>
<option value='MW'>Malawian</option>
<option value='MY'>Malaysian</option>
<option value='MV'>Maldivian</option>
<option value='ML'>Malian</option>
<option value='MT'>Maltese</option>
<option value='MH'>Marshallese</option>
<option value='MQ'>Martinican</option>
<option value='MR'>Mauritanian</option>
<option value='MU'>Mauritian</option>
<option value='MX'>Mexican</option>
<option value='FM'>Micronesian</option>
<option value='MD'>Moldovan</option>
<option value='MC'>Monegasque</option>
<option value='MN'>Mongolian</option>
<option value='ME'>Montenegrian</option>
<option value='MS'>Montserratian</option>
<option value='MA'>Moroccan</option>
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
<option value='OM'>Omani</option>
<option value='PK'>Pakistani</option>
<option value='PW'>Palauan</option>
<option value='PA'>Panamanian</option>
<option value='PG'>Papua New Guinean</option>
<option value='PY'>Paraguayan</option>
<option value='PE'>Peruvian</option>
<option value='PN'>Pitcairner</option>
<option value='PL'>Pole</option>
<option value='PF'>Polynesian</option>
<option value='PT'>Portuguese</option>
<option value='PR'>Puerto Rican</option>
<option value='QA'>Qatari</option>
<option value='RE'>Reunionese</option>
<option value='RO'>Romanian</option>
<option value='RU'>Russian</option>
<option value='RW'>Rwandan</option>
<option value='EH'>Sahrawi</option>
<option value='SH'>Saint Helenian</option>
<option value='KN'>Saint Kitts and Nevis national</option>
<option value='LC'>Saint Lucian</option>
<option value='PM'>Saint Pierre and Miquelon national</option>
<option value='SV'>Salvadorian</option>
<option value='WS'>Samoan</option>
<option value='SM'>San Marinese</option>
<option value='ST'>São Toméan</option>
<option value='SA'>Saudi Arabian</option>
<option value='SN'>Senegalese</option>
<option value='RS'>Serbian</option>
<option value='SC'>Seychellois</option>
<option value='SL'>Sierra Leonean</option>
<option value='SG'>Singaporean</option>
<option value='SK'>Slovak</option>
<option value='SI'>Slovene</option>
<option value='SB'>Solomon Islander</option>
<option value='SO'>Somali</option>
<option value='ZA'>South African</option>
<option value='GS'>South Georgia and the South Sandwich Islands</option>
<option value='KR'>South Korean</option>
<option value='ES'>Spaniard</option>
<option value='LK'>Sri Lankan</option>
<option value='SD'>Sudanese</option>
<option value='SR'>Surinamer</option>
<option value='SJ'>Svalbard and Jan Mayen</option>
<option value='SZ'>Swazi</option>
<option value='SE'>Swede</option>
<option value='CH'>Swiss</option>
<option value='SY'>Syrian</option>
<option value='TW'>Taiwanese</option>
<option value='TJ'>Tajik</option>
<option value='TZ'>Tanzanian</option>
<option value='TH'>Thai</option>
<option value='TG'>Togolese</option>
<option value='TK'>Tokelauan</option>
<option value='TO'>Tongan</option>
<option value='TT'>Trinidad and Tobago national</option>
<option value='TN'>Tunisian</option>
<option value='TR'>Turk</option>
<option value='TM'>Turkmen</option>
<option value='TC'>Turks and Caicos Islander</option>
<option value='TV'>Tuvaluan</option>
<option value='UG'>Ugandan</option>
<option value='UA'>Ukrainian</option>
<option value='UM'>United States Minor Outlying Islands</option>
<option value='UY'>Uruguayan</option>
<option value='VI'>US Virgin Islander</option>
<option value='UZ'>Uzbek</option>
<option value='VU'>Vanuatuan</option>
<option value='VA'>Vatican</option>
<option value='VE'>Venezuelan</option>
<option value='VN'>Vietnamese</option>
<option value='VC'>Vincentian</option>
<option value='WF'>Wallis and Futuna Islander</option>
<option value='YE'>Yemeni</option>
<option value='ZM'>Zambian</option>
<option value='ZW'>Zimbabwean</option>
<option value='AX'>Åland Islander</option>
</select>
</div>  
</div> <!-- /control-group -->

<div class="control-group">
     <label class="control-label" for="username">Designation</label>
<div class="controls">
<select class="form-control"  data-placement="designation" name="designation"  value = "">
<option disabled> Select Designation</option>
 <option></option>
<option>Dr</option>
<option>Bank Manager</option>
</select>
</div>                                       

</div> <!-- /control-group -->

    <div class="control-group">
        <label class="control-label" for="username">Religion</label>
<div class="controls">
<select class="form-control"  data-placement="gender" name="religion">
<option disabled>Select Religion</option>
<option></option>
<option>Christian</option>
<option>Islamic</option>
</select>
</div> <!-- /controls -->
</div> <!-- /control-group -->

<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{Input::get('tribe')}}" name="tribe" placeholder="Tribe" />
</div> <!-- /controls -->
</div> <!-- /control-group -->

</div>

<div class="span4 pull-right" style="margin-left:4px;">

     <h4 class = "text-left">Contact Information</h4>

    <div class="control-group">

        <div class="controls">
            <input type="text" class="input-xlarge " id="phone_no" name="phone_no" placeholder = "Mobile number">

        </div> <!-- /controls -->
    </div> <!-- /control-group -->

    <div class="control-group">

        <div class="controls">
            <input type="text" class="input-xlarge " id="" name="telephone_no" placeholder = "Telephone number">

        </div> <!-- /controls -->
    </div> <!-- /control-group -->
    <div class="control-group">

        <div class="controls">
            <input type="email" class="input-xlarge " id="" name="email" placeholder = "Email">

        </div> <!-- /controls -->
    </div>

    <h4 class = "text-left">Physical address</h4>

    <div class="control-group">

        <div class="controls">
            <select class="form-control"  data-placement="district" name="district" required >
                <option disabled>Select District</option>
                <option>Kiondoni</option>
                <option>Ilala</option>
                <option>Temeke</option>
            </select>

        </div> <!-- /controls -->
    </div> <!-- /control-group -->

    <div class="control-group">

        <div class="controls">
            <input type="text" class="input-xlarge " id="" name="street" placeholder = "Street">

        </div> <!-- /controls -->
    </div> <!-- /control-group -->
    <div class="control-group">

        <div class="controls">
            <input type="text" class="input-xlarge " id="" name="house_no" placeholder = "House number">

        </div> <!-- /controls -->
    </div>

<h4>Next of Kin Information </h4>
<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{Input::get('fullname')}}" name="fullname" required  placeholder="Full Name"/>

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{Input::get('phone2')}}" name="phone2"  placeholder="Phone Number"/>

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{Input::get('location')}}" name="location"    placeholder="Location"/>

</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">
<div class="controls">
<input type="text" class="input-xlarge " id="" value="{{Input::get('workingplace')}}" name="workingplace"  placeholder="Working Place"/>


</div> <!-- /controls -->               
</div> <!-- /control-group -->
<div class="control-group">
<div class="controls">
<button type="reset" class="btn btn-warning" id="cancel" name = "cancel" value = "Cancel" >Cancel</button>
<button type="submit" class="btn btn-primary" id="psave">Save</button>
</div> <!-- /controls -->               
</div> <!-- /control-group -->

</form>

</div>	

</fieldset>	

</section>
</div>
@stop
