<form id="editform" class="form-horizontal" url="{{url("manage_user")}}" action="{{url("manage_user/{$user->id}")}}" method="post">
    <fieldset>
        <div class="control-group">  

         <label class="control-label" for="email">Email</label>

            <div class="controls">
                <input type="text" class="input-xlarge" name="email" id="email" value="{{$user->email}}">
                
            </div>                                       
  
        </div> <!-- /control-group -->

         <div class="control-group"> 
        <label class="control-label" for="first_name">First name</label>
            <div class="controls">
                <input type="text" class="input-xlarge " id="first_name" value="{{$user->first_name}}" name="first_name" >
                
            </div> <!-- /controls --> 
            </div>
        <div class="control-group">                                         
            <label class="control-label" for="middle_name">Middle name</label>
            <div class="controls">
                <input type="text" class="input-xlarge " id="middle_name" value="{{$user->middle_name}}" name="middle_name">
                
            </div> <!-- /controls -->               
        </div> <!-- /control-group -->
        <div class="control-group">                                         
            <label class="control-label" for="last_name">Last name</label>
            <div class="controls">
                <input type="text" class="input-xlarge " id="last_name" value="{{$user->last_name}}" name="last_name">
                
            </div> <!-- /controls -->               
        </div> <!-- /control-group -->
        <div class="control-group">                                         

            <label class="control-label" for="phone_no">Phone Number</label>
            <div class="controls">
                <input type="text" class="input-xlarge " id="phone_no" value="{{$user->phone_no}}" name="phone_no">

                
            </div> <!-- /controls -->               
        </div> <!-- /control-group -->

         <div class="control-group">                                         

            <label class="control-label" for="username">User Name</label>
            <div class="controls">
                <input type="text" class="input-xlarge " id="username" value="{{$user->username}}" name="username" >
                
            </div> <!-- /controls -->               
        </div> <!-- /control-group -->
         <div class="control-group">                                         
            <label class="control-label" for="extension_no">Extension Number</label>
            <div class="controls">
                <input type="text" class="input-xlarge " id="extension_no" value="{{$user->extension_no}}" name="extension_no" >
                
            </div> <!-- /controls -->               
        </div> <!-- /control-group -->
         <div class="control-group">                                         
                <label class="control-label" for="room_no">Room Number</label>
                <div class="controls">
               {{Form::select('room_no',array(''=>'' , '1'=>'1','2'=>'2','3'=>'3','4'=>'5'), $user->room_no ,array('required'=>'required'))}}

                </div>
                   
            </div>


        <div class="control-group">                                         
            <label class="control-label" for="level" id="">Designation</label>
            <div class="controls">
            	{{Form::select('level',array('1'=>'Pharmacist','2'=>'Lab Technician','3'=>'Receptionist','4'=>'Doctor','5'=>'Accountant'), $user->level, array('id'=>"level"))}}

            </div>
                         
        </div> <!-- /control-group -->

         <div class="control-group">                                         
            <label class="control-label" for="contact">Status</label>
            <div class="controls">
               <p> <input type="radio" name="status" id="optionsRadios1" value="active" {{ User::active($user->status) }}> Active
                <input type="radio" name="status" id="optionsRadios2" value="blocked" {{ User::blocked($user->status) }}> Block </p>
            </div> <!-- /controls -->               
        </div> <!-- /control-group -->

    
    </fieldset>
</form>