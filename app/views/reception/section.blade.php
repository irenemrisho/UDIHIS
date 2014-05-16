@if($section == "OPD")

<p>Doctor</p>
<select id="opd" class="form-control" name="sectioninfo">  
<?php 
$docts = User::where('level',4)->get();
 ?>
@foreach($docts as $dr)
	<option name="sectioninfo" value="{{$dr->id}}">{{$dr->first_name}} {{$dr->last_name}}</option>

@endforeach
</select>

@endif
@if($section == "Insurance")

<p>Insurance Company</p>
<select id="insurance" class="form-control" name="paymenttype">  
<option name="" value=""></option>
<option name="nif" value="">NIF</option>
<option name="aar" value="">AAR</option>
<option name="nhif" value="">NHIF</option>


</select>

@endif

@if($section == "IPD")
<p>Doctor</p>
<select id="ipd" class="form-control" name="sectioninfo">  
<?php $docts = User::where('level',4)->get(); ?>
<option></option>
@foreach($docts as $dr)
	<option name="sectioninfo" value="{{$dr->id}}">{{$dr->first_name}} {{$dr->last_name}}</option>
@endforeach
</select>
<input type="hidden" value={{url('getDrRooms')}} id="url" />
<div id="ipdinfo"></div>

<script type="text/javascript">
$(document).ready(function(){
	$('#ipd').on('change', function(){
		var  dr  = $(this).val();
		var  url = $('#url').val();
		$.post(url,{dr:dr}, function(data){
			$('#ipdinfo').html(data);
		});
	});
});	
</script>

@endif


@if($section == "ANC")
<p>Doctor</p>
<select id="ipd" class="form-control" name="sectioninfo">  
<?php $docts = User::where('level',4)->get(); ?>
@foreach($docts as $dr)
	<option name="sectioninfo" value="{{$dr->id}}">{{$dr->first_name}} {{$dr->last_name}}</option>
@endforeach


@endif


