@if($g == "all")
	<center><h3>
		Report for all patients visited a doctor  
	</h3></center>
@endif

@if($g == "male")
	<center><h3>
		Report for all male patients visited a doctor  
	</h3></center>
@endif

@if($g == "female")
	<center><h3>
		Report for all female patients visited a doctor  
	</h3></center>
@endif

<table class="table table-bordered" style="width:100%">
@if($g == "all")
<tr>
	<th style="width:50%">Number of males</th>
	<th style="width:50%">{{Patient::getNo("male", $visits)}}</th>
</tr>
<tr>
	<th style="width:50%">Number of Female</th>
	<th style="width:50%">{{Patient::getNo("female", $visits)}}</th>
</tr>
<tr>
	<th style="width:50%">Total</th>
	<th style="width:50%"> {{Patient::getNo($g, $visits)}}</th>
</tr>
@endif
@if($g == "male")
<tr>
	<th style="width:50%">Number of males</th>
	<th style="width:50%">{{Patient::getNo("male", $visits)}}</th>
</tr>
@endif
@if($g == "female")
<tr>
	<th style="width:50%">Number of males</th>
	<th style="width:50%">{{Patient::getNo("female", $visits)}}</th>
</tr>
@endif

</table>

@if($g == "all")
	<center><h3>
		<a href="{{url('doctor/printReport/all')}}?date={{$dt}}"><button class="btn btn-small btn-primary"><i class="icon-file"></i> Print</button></a>
	</h3></center>
@endif

@if($g == "male")
	<center><h3>
		<a href="{{url('doctor/printReport/male')}}?date={{$dt}}"><button class="btn btn-small btn-primary"><i class="icon-file"></i> Print</button></a>
	</h3></center>
@endif

@if($g == "female")
	<center><h3>
		<a href="{{url('doctor/printReport/female')}}?date={{$dt}}"><button class="btn btn-small btn-primary"><i class="icon-file"></i> Print</button></a>
	</h3></center>
@endif