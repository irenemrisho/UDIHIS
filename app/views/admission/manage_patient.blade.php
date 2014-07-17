@extends('dashboard')
@section('main')
<div class="widget-header"><h3>Inpatient Information </h3> <span class="pull-right" id="back" style="cursor:pointer; margin-right:8px"><i class=" icon-share"></i> Back </span> </div>
<table class="table">
	<tr>
		<td><b>File Number: {{$patient->filenumber}}</b></td>
		
		<td><b>Rhesus</b></td>
		
	</tr>
	<tr>
		<td><b>First Name: {{$patient->firstname}}</b></td>
		
		<td><b>Birth Date: {{$patient->birth}}</td>
		
	</tr>
	<tr>
		<td><b>Last Name: {{$patient->lastname}}</b></td>
	
		<td><b>Weight: {{$patient->weight}}</td>
		
	</tr>
	<tr>
		<td><b>Payment Type: {{$patient->paymenttype}}</b></td>
		
		<td><b>Allergy: {{$patient->allergy}}</b></td>
		
	</tr>
	<tr>
		<td><b>Blood Group:{{$patient->bloodgroup}}</b></td>
		
		<td><b>Gender: {{$patient->gender}}</b></td>
		
	</tr>
	<tr>
		<td colspan="4">
			    <div class="btn-toolbar" data-role="editor-toolbar"
    data-target="#Inpatient_Notes">
   <a data-edit="bold">...</a>
    </div> 
			<p><b>Inpatient Notes</b></p>
			<textarea class="span8 form-control"  rows="6" id="consultNotes" value="">
			

			</textarea>
		</td>
	</tr>
</table>
<div class="" id="">
<input id="pid" type="hidden" value="{{$patient->id}}" />
<button class="btn btn-primary" id="discharged">Discharge</button>

<button class="btn btn-primary" id="tranfered">Transfer</button>

</div>

@stop

<script type="text/javascript">
	    

					 $('#discharged').on('click', function(){
					      alert('click');
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