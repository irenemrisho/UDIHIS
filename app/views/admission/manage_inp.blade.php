
<div class="widget-header"><h3>Inpatient Information </h3> <span class="pull-right" id="back" style="cursor:pointer; margin-right:8px"><i class=" icon-share"></i> Back </span> </div>
<table class="table">
	<tr>
		<td><b>File Number:</b></td>
		
		<td><b>Rhesus</b></td>
		
	</tr>
	<tr>
		<td><b>First Name:</b></td>
		
		<td><b>Birth Date</td>
		
	</tr>
	<tr>
		<td><b>Last Name:</b></td>
	
		<td><b>Weight:</td>
		
	</tr>
	<tr>
		<td><b>Payment Type:</b></td>
		
		<td><b>Allergy:</b></td>
		
	</tr>
	<tr>
		<td><b>Blood Group:</b></td>
		
		<td><b>Gender:</b></td>
		
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
<input id="pid" type="hidden" value="" />
<button class="btn btn-primary" id="nextVisit">Discharge</button>

<button class="btn btn-primary" id="admit">Transfer</button>

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