<?php 
	$patient1 = Patients_visit::where('patient_id', $patient->id)->first();
?>
<div class="widget-header"><h3>Patient Information </h3> <span class="pull-right" id="back" style="cursor:pointer; margin-right:8px"><i class=" icon-share"></i> Back </span> </div>
<table class="table">
	<tr>
		<td><b>File Number:</b></td>
		<td style="text-align:left">{{ $patient->filenumber}}</td>
		<td><b>Rhesus</b></td>
		<td style="text-align:left">{{ $patient->rhesus}}</td>
	</tr>
	<tr>
		<td><b>First Name:</b></td>
		<td style="text-align:left">{{ $patient->firstname}}</td>
		<td><b>Birth Date</td>
		<td style="text-align:left">{{ $patient->birth}}</td>
	</tr>
	<tr>
		<td><b>Last Name:</b></td>
		<td style="text-align:left">{{ $patient->lastname}}</td>
		<td><b>Weight:</td>
		<td style="text-align:left">{{ $patient1->weight}}</td>
	</tr>
	<tr>
		<td><b>Payment Type:</b></td>
		<td style="text-align:left">{{ $patient->paymenttype}}</td>
		<td><b>Allergy:</b></td>
		<td style="text-align:left">{{ $patient1->allergy}}</td>
	</tr>
	<tr>
		<td><b>Blood Group:</b></td>
		<td style="text-align:left">{{ $patient1->bloodgroup }}</td>
		<td><b>Gender:</b></td>
		<td style="text-align:left">{{ $patient->gender}}</td>
	</tr>
	<tr>
		<td colspan="4">
			    <div class="btn-toolbar" data-role="editor-toolbar"
    data-target="#consultNotes">
   <a data-edit="bold">...</a>
    </div> 
			<p><b>Consultation Notes</b></p>
			<textarea class="span8 form-control"  rows="6" id="consultNotes" value="">
			{{$patient1->consultation}}

			</textarea>
		</td>
	</tr>
</table>
<div class="" id="{{$patient->id}}">
<input id="pid" type="hidden" value="{{$patient->id}}" />
<button class="btn btn-primary" id="nextVisit">Next Visit</button>

<button class="btn btn-primary" id="admit">Admit</button>
<button class="btn btn-primary" id="laboratory">Laboratory</button>
<button class="btn btn-primary" id="prescribe">Prescribe</button>
</div>
<script type="text/javascript">
	    

					 $('#laboratory').on('click', function(){
					        var pid = $('#pid').val();
					        window.location = "patients/lab_test/" + pid;
					    });
					 $('#prescribe').on('click', function(){
					        var pid = $('#pid').val();
					        window.location = "patients/prescribe/" + pid;
					    });
					 $('#admit').on('click',function(){
					 	var pid =  $('#pid').val();
					 	window.location = "patients/admit/" + pid;
					 });

				    $('#back').on('click', function(){
				        $('#loadpatientinfo').hide();
				        $('#table-content').css('opacity','1').fadeIn(800);
				    });
				var timeoutId;
				$('#consultNotes').on('input propertychange', function() {
				    console.log('Textarea Change');

				    clearTimeout(timeoutId);
				    timeoutId = setTimeout(function() {
				        // Runs 1 second (1000 ms) after the last change    
				        saveToDB();
				    }, 1000);
				});

				function saveToDB()
				{
				     
					var conNotes = $('#consultNotes').val();
					var pid      = $('#pid').val();
					$.post('consultation/autosave', {cN:conNotes,pid:pid}, function(data){

					}); 
				}

</script>