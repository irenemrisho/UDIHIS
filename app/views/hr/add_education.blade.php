@extends('dashboard')
@section('main')
<h1 class="page-title"><i class="icon-th-large"></i>Add Education</h1>
<div class="widget-content">
	<form id="qualification_form" action="{{URL::to('person/edit_3/' . $person->id )}}" method="POST">
	    <div class="span4 pull-left">
	    <h4>Institution Information</h4>
	        <div class="control-group">
				<label class="control-label" for="institution">Institution Name</label>
				<div class="controls">
				<input type="text" class="input-xlarge " id="" name="institution" value="" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="institution_loc">Institution Location*</label>
				<div class="controls">
				<input type="text" class="input-xlarge " id="" name="institution_loc" value="" />
				</div>
			</div>
			<div class="control-group">
		         <label class="control-label" for="profession">Year Completed</label>
				<div class="controls">
					<select class="form-control input-xlarge" name="profession"/>
						<option disabled>Select Year</option>
						<option></option>
						<option>1990</option>
						 <option>1991</option>
						<option>1992</option>
						<option>1993</option>
						<option>1994</option>
						<option>1995</option>
					</select>
				</div>
			</div>
	        </div>
	        <div class="span4 pull-right">
	            <h4>Level</h4>
	            <div class="control-group">
		            <label class="control-label" for="profession">Degree</label>
					<div class="controls">
						<select class="form-control input-xlarge" name="profession"/>
							<option disabled>Select level</option>
							<option></option>
							<option>PhD</option>
							<option>Masters</option>
							<option>Bachelor</option>
							<option>Diploma</option>
							<option>Certificate</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="major">Major</label>
					<div class="controls">
					<input type="text" class="input-xlarge " id="" name="major" value="" />
					</div>
				</div>
				<br>
				<button type="reset" class="btn">cancel</button>
				<button type="submit" class="btn">Add</button>
		</div>
	</form>
</div>
@stop