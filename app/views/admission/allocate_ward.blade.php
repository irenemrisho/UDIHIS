@extends('dashboard')
@section('main')
<h1 class="page-title">
<i class="icon-th-large"></i>
Allocate Ward To A Patient
</h1>
<div class="row">
<div class="span9">
<div class="widget-content">
<form id="myWizard" type="get" action="">
<h4 >Full name :  </h4>
<div class="">
<h4> Hospital File no: UD/2014/<b></b></h4>
<input name="pid" value="" type="hidden" />
<label class="control-label">Direct To Ward</label>
<p>Ward</p>
<select id="section" name="section" class="form-control">
<option></option>
<option>Male</option>
<option>Female</option>

</select>                   

</fieldset>
</section>
</form>
</div>
</div>
</div>
@stop