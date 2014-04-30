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
<p>Doctor</p>
<select id="ipd" class="form-control" name="sectioninfo">  
<?php $docts = User::where('level',4)->get(); ?>
@foreach($docts as $dr)
	<option>{{$dr->first_name}} {{$dr->last_name}}</option>
@endforeach
</select>


@endif


@if($section == "ANC")
<p>Doctor</p>
<select id="ipd" class="form-control" name="sectioninfo">  
<?php $docts = User::where('level',4)->get(); ?>
@foreach($docts as $dr)
	<option>{{$dr->first_name}} {{$dr->last_name}}</option>
@endforeach


@endif


