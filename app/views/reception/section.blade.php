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
<label class="form-control" value="{{$dr->id}}">Room no: {{$dr->room_no}}</label>
@endif

@if($section == "IPD")
<p>Doctor</p>
<select id="ipd" class="form-control" name="sectioninfo">  
<?php $docts = User::where('level',4)->get(); ?>
@foreach($docts as $dr)
	<option name="sectioninfo" value="{{$dr->id}}">{{$dr->first_name}} {{$dr->last_name}}</option>
@endforeach
</select>
<label class="form-control" value="{{$dr->id}}">Room no: {{$dr->room_no}}</label>


@endif


@if($section == "ANC")
<p>Doctor</p>
<select id="ipd" class="form-control" name="sectioninfo">  
<?php $docts = User::where('level',4)->get(); ?>
@foreach($docts as $dr)
	<option name="sectioninfo" value="{{$dr->id}}">{{$dr->first_name}} {{$dr->last_name}}</option>
@endforeach

<label class="form-control" value="{{$dr->id}}">Room no: {{$dr->room_no}}</label>
@endif


