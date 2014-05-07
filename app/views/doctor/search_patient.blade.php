					@if(isset($patients))
						<table id="patients" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>File Number</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Payment Status</th>
									
									<th>&nbsp;</th>
								</tr>
							</thead>
							
							<tbody>
					
							@foreach($patients as $patient)
									<tr><td>{{$patient->filenumber}}</td>
										<td>{{$patient->firstname}}</td>
										<td>{{$patient->lastname}}</td>
										<td>{{$patient->paymenttype}}</td>
										<td class="action-td" id="{{$patient->id}}">
											<a href="#myModal" role="button" class="btn fetch-patient" data-toggle="modal">Attend</a>
										</td>
									</tr>
							@endforeach
					@else

						<div class="alert alert-danger">No data found! </div>

					@endif

<script type="text/javascript">
	$(document).ready(function(){
		$('.fetch-patient').on('click', function(data){
        var id = $(this).parent().attr('id');
        $.post('patients/profile', {id:id}, function(data){
            $('#profile').html(data);
        });
    });
	});
</script>					

