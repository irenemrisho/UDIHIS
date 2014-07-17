<?php

$cash     = 0;
$insured  = 0;

foreach($reports as $rpt){
	$pid  = $rpt->patient_id;
	$ptyp = Patients_visit::where('patient_id', $pid)->first()->paymenttype;
	if($ptyp == "Cash"){
		$cash++;
	}else{
		$insured++;
	}
}
?>

<table class="table table-bordered" style="width:100%">

<tr>
	<th style="width:40%">Paid Cash</th>
	<th style="width:40%">Insured</th>
	<th style="width:40%">Total Amount</th>
</tr>

<tr>
	<th style="width:40%">{{$cash}}</th>
	<th style="width:40%">{{$insured}}</th>
	<th style="width:40%">{{$cash + $insured}}</th>
</tr>

</table>

<center><h3>
		<a href="{{url('billing/printReport/')}}?from={{$f}}&to={{$t}}"><button class="btn btn-small btn-primary"><i class="icon-file"></i> Print</button></a>
</h3></center>
