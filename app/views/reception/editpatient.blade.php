@extends('dashboard')
@section('main')
<h1 class="page-title"><i class="icon-th-large"></i>Edit patient information</h1>

<div class="widget-content">
<section class="step" data-step-title="Personal Information">
<fieldset >
 @if(isset($error))
<div class="alert alert-danger" id="message">{{ $error }}</div>

@endif

<div class="widget-content">
<div class="tabbable">
<ul class="nav nav-tabs">
<li class="active">
<a href="#1" data-toggle="tab">Personal Informations</a>
</li>
<li class=""><a href="#2" data-toggle="tab">Initial information</a></li>
<li class=""><a href="#3" data-toggle="tab">More information</a></li>
</ul>

<div class="tab-content" style="height: 400px">
<div class="tab-pane " id="2" style="position:absolute">
<form id="edit-profile" class="form-horizontal4" action="manage_user" method="post">    
<fieldset >
<div class="span4 pull-left">
    
        
             <div class="control-group">

            <div class="controls">
                <label class="control-label" for="firstname">First name</label>
            <input type="text" class="input-xlarge " id="" value="{{$patient->firstname}}" name="first_name" required />

            </div> <!-- /controls -->
            </div>
            <div class="control-group">
            <label class="control-label" for="last_name">Last name</label>
            <div class="controls">
            <input type="text" class="input-xlarge " id="" value="{{$patient->lastname}}" name="last_name" required />

            </div> <!-- /controls -->
            </div> <!-- /control-group -->
         
           <div class="control-group">
                <label class="control-label" for="contact">Religion</label>
                <div class="controls">
                <input type="text" class="input-xlarge " id="" value="{{$patient->religion}}" name="religion" required>
                </div> <!-- /controls -->
           </div> <!-- /control-group -->
          <div class="control-group">
            <label class="control-label" for="contact">Tribe</label>
            <div class="controls">
            <input type="text" class="input-xlarge " id="" value="{{$patient->tribe}}" name="tribe" required>
            </div> <!-- /controls -->
        </div><!-- /control-group -->

        <div class="control-group">
        <label class="control-label" for="first_name">Date of birth</label>
        <div class="controls">
        <input type="text" class="input-xlarge date" id="" value="{{$patient->birth}}"  name="birth_date" required />
        </div> <!-- /controls -->
        </div>

        <div class="control-group">
        <label class="control-label" for="gender">Gender</label>
        <div class="controls">
            <select class="form-control" name="gender" required>
                <option></option>
                <option>Male</option>
                <option>Female</option>
            </select>
        </div>
        </div>

   
</div>
<div class="span5 pull-right" style="margin-left:4px;">
        <div class="control-group">  
             <label class="control-label" for="username">Username</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" name="username" id="username" value="">
                    
                </div>
          <div class="control-group">                                         
                <label class="control-label" for="room_no">Room Number</label>
                <div class="controls">
               {{Form::select('room_no',array(''=>'' , '1'=>'1','2'=>'2','3'=>'3','4'=>'5'), '', array('required'=>'required'))}}

                </div>
                   
            </div> 

    <h4 class = "text-left">Contact Information</h4>
     
            <div class="control-group">                                         
               
                <div class="controls">
                    <input type="text" class="input-xlarge " id="phone_no" name="phone_no" placeholder = "phone_number">
                    
                </div> <!-- /controls -->               
            </div> <!-- /control-group -->

             <div class="control-group">                                         
               
                <div class="controls">
                    <input type="text" class="input-xlarge " id="" name="email" placeholder = "email">
                    
                </div> <!-- /controls -->               
            </div> <!-- /control-group -->
<div class="control-group">                                         
               
                <div class="controls">
                    <input type="text" class="input-xlarge " id="" name="extension_no" placeholder = "extension_number">
                    
                </div> <!-- /controls -->               
            </div> 
            
            <div class="pull-left">
                <button class="btn">Cancel</button> <button type="submit" class="btn btn-primary">Add</button>
            </div>
</div>  

</fieldset> 
</form>

<div>

</div>

</div>

<div class="tab-pane active" id="1">
<div class="tab-pane " id="2" style="position:absolute">
<form id="edit-profile" class="form-horizontal4" action="manage_user" method="post">    
<fieldset >
<div class="span4 pull-left">
    
        
             <div class="control-group"> 
            <label class="control-label" for="first_name">First name</label>
                <div class="controls">
                    <input type="text" class="input-xlarge " id="" value="" name="first_name" required />
                    
                </div> <!-- /controls --> 
                </div>
            <div class="control-group">                                         
                <label class="control-label" for="middle_name">Middle name</label>
                <div class="controls">
                    <input type="text" class="input-xlarge " id="" value="" name="middle_name" >
                    
                </div> <!-- /controls -->               
            </div> <!-- /control-group -->
            <div class="control-group">                                         
                <label class="control-label" for="last_name">Last name</label>
                <div class="controls">
                    <input type="text" class="input-xlarge " id="" value="" name="last_name" required />
                    
                </div> <!-- /controls -->               
            </div> <!-- /control-group -->
           
            <div class="control-group">  
             <label class="control-label" for="password">Password</label>
                <div class="controls">
                    <input type="password" class="input-xlarge" name="password" id="" value="">
                    
                </div>                                       
      
            </div> <!-- /control-group -->
          <div class="control-group">                                         
                <label class="control-label" for="designation">Designation</label>
                <div class="controls">
                    {{Form::select('level',array('1'=>'Pharmacist','2'=>'Lab Technician','3'=>'Receptionist','4'=>'Doctor','5'=>'Accountant'), '', array('required'=>'required'))}}

                </div>
                             
            </div> <!-- /control-group -->

   
</div>
<div class="span5 pull-right" style="margin-left:4px;">
        <div class="control-group">  
             <label class="control-label" for="username">Username</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" name="username" id="username" value="">
                    
                </div>
          <div class="control-group">                                         
                <label class="control-label" for="room_no">Room Number</label>
                <div class="controls">
               {{Form::select('room_no',array(''=>'' , '1'=>'1','2'=>'2','3'=>'3','4'=>'5'), '', array('required'=>'required'))}}

                </div>
                   
            </div> 

    <h4 class = "text-left">Contact Information</h4>
     
            <div class="control-group">                                         
               
                <div class="controls">
                    <input type="text" class="input-xlarge " id="phone_no" name="phone_no" placeholder = "phone_number">
                    
                </div> <!-- /controls -->               
            </div> <!-- /control-group -->

             <div class="control-group">                                         
               
                <div class="controls">
                    <input type="text" class="input-xlarge " id="" name="email" placeholder = "email">
                    
                </div> <!-- /controls -->               
            </div> <!-- /control-group -->
<div class="control-group">                                         
               
                <div class="controls">
                    <input type="text" class="input-xlarge " id="" name="extension_no" placeholder = "extension_number">
                    
                </div> <!-- /controls -->               
            </div> 
            
            <div class="pull-left">
                <button class="btn">Cancel</button> <button type="submit" class="btn btn-primary">Add</button>
            </div>
</div>  

</fieldset> 
</form>

<div>

</div>

</div>

</div>  
<div class="tab-pane active" id="3">
<div class="tab-pane " id="2" style="position:absolute">
<form id="edit-profile" class="form-horizontal4" action="manage_user" method="post">    
<fieldset >
<div class="span4 pull-left">
    
        
             <div class="control-group"> 
            <label class="control-label" for="first_name">Payment type</label>
                <div class="controls">
                    <input type="text" class="input-xlarge " id="" value="" name="first_name" required />
                    
                </div> <!-- /controls --> 
                </div>
            <div class="control-group">                                         
                <label class="control-label" for="middle_name">Middle name</label>
                <div class="controls">
                    <input type="text" class="input-xlarge " id="" value="" name="middle_name" >
                    
                </div> <!-- /controls -->               
            </div> <!-- /control-group -->
            <div class="control-group">                                         
                <label class="control-label" for="last_name">Last name</label>
                <div class="controls">
                    <input type="text" class="input-xlarge " id="" value="" name="last_name" required />
                    
                </div> <!-- /controls -->               
            </div> <!-- /control-group -->
           
            <div class="control-group">  
             <label class="control-label" for="password">Password</label>
                <div class="controls">
                    <input type="password" class="input-xlarge" name="password" id="" value="">
                    
                </div>                                       
      
            </div> <!-- /control-group -->
          <div class="control-group">                                         
                <label class="control-label" for="designation">Designation</label>
                <div class="controls">
                    {{Form::select('level',array('1'=>'Pharmacist','2'=>'Lab Technician','3'=>'Receptionist','4'=>'Doctor','5'=>'Accountant'), '', array('required'=>'required'))}}

                </div>
                             
            </div> <!-- /control-group -->

   
</div>
<div class="span5 pull-right" style="margin-left:4px;">
        <div class="control-group">  
             <label class="control-label" for="username">Username</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" name="username" id="username" value="">
                    
                </div>
          <div class="control-group">                                         
                <label class="control-label" for="room_no">Room Number</label>
                <div class="controls">
               {{Form::select('room_no',array(''=>'' , '1'=>'1','2'=>'2','3'=>'3','4'=>'5'), '', array('required'=>'required'))}}

                </div>
                   
            </div> 

    <h4 class = "text-left">Contact Information</h4>
     
            <div class="control-group">                                         
               
                <div class="controls">
                    <input type="text" class="input-xlarge " id="phone_no" name="phone_no" placeholder = "phone_number">
                    
                </div> <!-- /controls -->               
            </div> <!-- /control-group -->

             <div class="control-group">                                         
               
                <div class="controls">
                    <input type="text" class="input-xlarge " id="" name="email" placeholder = "email">
                    
                </div> <!-- /controls -->               
            </div> <!-- /control-group -->
<div class="control-group">                                         
               
                <div class="controls">
                    <input type="text" class="input-xlarge " id="" name="extension_no" placeholder = "extension_number">
                    
                </div> <!-- /controls -->               
            </div> 
            
            <div class="pull-left">
                <button class="btn">Cancel</button> <button type="submit" class="btn btn-primary">Add</button>
            </div>
</div>  

</fieldset> 
</form>

<div>

</div>

</div>

</div>
</div>
</div>
</div>
@stop