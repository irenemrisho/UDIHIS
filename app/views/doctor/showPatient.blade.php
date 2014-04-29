<div style="width:800px; margin:20px; font-size: 17px">
	<div class="pull-left" style="width:400px; ">
		<ul>
			<li style="list-style: none">File Number:  {{ $patient->filenumber}}</li>
			<li style="list-style: none">First Name:    {{ $patient->firstname}}</li>
			<li style="list-style: none">Last Name :    {{ $patient->lastname}}</li>
			<li style="list-style: none">Payment Type:   {{ $patient->paymenttype}}</li>
			<li style="list-style: none">Blood Group :   {{ $patient->bloodgroup}}</li>
			
		</ul>
	</div>
	
	<div class="pull-right" style="width:400px">
 		<ul>
			<li style="list-style: none">Rhesus:   {{ $patient->rhesus}}</li>
			<li style="list-style: none">Birth Date:   {{ $patient->birth}}</li>
			<li style="list-style: none">Weight:   {{ $patient->weight}}</li>
			<li style="list-style: none">Allergy:   {{ $patient->alergy}}</li>
			<li style="list-style: none">Gender: {{ $patient->gender}} <input id="pid" type="hidden" value="{{$patient->id}}"/></li>
			
		</ul>
	</div>

	<div style="clear:both" style="width:400px; margin: 40px">
		<label class="control-label" for="">Consultation Notes</label>
	<textarea rows="2" style="width:600px;" class="form-control"></textarea>	
	</div>	
</div>