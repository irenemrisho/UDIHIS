@if($section == "OPD")

<p>Doctor</p>
<select id="opd" class="form-control" name="sectioninfo">  
<?php $docts = User::where('level',4)->get(); ?>
@foreach($docts as $dr)
	<option>{{$dr->first_name}} {{$dr->last_name}}</option>
@endforeach
</select>

@endif

@if($section == "IPD")


@endif


@if($section == "ANC")


@endif


