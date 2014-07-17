@extends('dashboard')
@section('main')

<h3 class="widget-header">Reset password</h3>
<div class="widget-content">
<form role="form" class="form-horizontal">
  <div class="form-horizontal">
  <div class="span4">
    <label for="InputEmail1">Email address</label>
   
    <input type="text" class="form-control" id="InputEmail1" placeholder="Enter email">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  
</form>
</div>
<h3><a href="login" style="text-decoration:none;">Back To Login</a></h3>


@stop