@if($section == "Female")
<p>Available Rooms</p>
<select id="opd" class="form-control" name="sectioninfo">  
<?php $rooms = Room::all()->get(); ?>
@foreach($rooms as $room)
<option name="sectioninfo" value="{{$room->id}}">{{$room->room_no}}</option>
@endforeach


@endif


@if($section == "Male")
<p>Available Rooms</p>
<select id="opd" class="form-control" name="sectioninfo">  
<?php $rooms = Room::all()->get(); ?>
@foreach($rooms as $room)
<option name="sectioninfo" value="{{$room->id}}">{{$room->room_no}}</option>
@endforeach


@endif

