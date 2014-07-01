@extends('dashboard')
@section('main')
<h1 class="page-title"><i class="icon-th-large"></i>Add Next of Kin</h1>
	<div class="widget-content">
		<form id="addnextofkinform" action="{{URL::to('person/update_next_of_kin/' . $person->id )}}" method="POST">
        <div class="span4 pull-left">
	        <div class="control-group">
				<label class="control-label" for="name">Name*</label>
				<div class="controls">
				<input type="text" class="input-xlarge " id=""  name="name" required value="{{$person->next_kn_name}}">
				</div>
			</div>
			<div class="control-group">
		        <label class="control-label" for="Relationship">Relationship*</label>
				<div class="controls">
				<select class="form-control input-xlarge" name="Relationship" required>
				<option disabled>Select Relationship</option>
				<option>{{$person->relationship}}</option>
				<option>Mother</option>
				<option>Father</option>
				<option>Friend</option>
				<option>Sibling</option>
				<option>Wife</option>
				<option>Husband</option>
				<option>Uncle</option>
				<option>Aunt</option>
				<option>Nice</option>
				<option>Nephew</option>
				<option>In law</option>
				<option>Guardian</option>
				</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="email">Email Address</label>
				<div class="controls">
				<input type="text" class="input-xlarge " id="" name="email" value="{{$person->next_kn_email}}" >
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="mailing">Physical Address</label>
				<div class="controls">
				<textarea rows="3" name="mailing" class="input-xlarge">{{$person->next_kn_mailing}}</textarea>
				</div>
			</div>
        </div>
       	<div class="span4 pull-right">
            <div class="control-group">
				<label class="control-label" for="mobilephone">Mobile Phone Number*</label>
				<div class="controls">
				<input type="text" class="input-xlarge " id="" name="mobilephone" value="{{$person->next_kn_mob_no}}" required />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="telephone">Telephone Number</label>
				<div class="controls">
				<input type="text" class="input-xlarge " id=""  name="telephone" value="{{$person->next_kn_tel_no}}">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="notes">Notes</label>
				<div class="controls">
				<textarea rows="3" name="notes" class="input-xlarge">{{$person->next_kn_notes}}</textarea>
				</div>
			</div>
			<br>
			<button type="reset" class="btn">Cancel</button>
			<button type="submit" class="btn">Add</button>
        </div>
        </form>
    </div>
@stop