<div class="navbar navbar-fixed-top">
    
    <div class="navbar-inner">
        
        <div class="container">
            
            
            <center><div class="" > <div class="pull-left">{{HTML::image('packages/bootstrap/img/logo1.png')}}
            </div> <div class=" pull-right">{{HTML::image('packages/bootstrap/img/logo2.jpg')}}</div>
            <div class=" " >
        <h4>UDSM INTERGRATED HOSPITAL INFORMATION SYSTEM </h4></div>
            </div></center>
            
            
            <div class="nav-collapse">
            
                <ul class="nav pull-right">
                
                </ul>
                
            </div> <!-- /nav-collapse -->
            
        </div> <!-- /container -->
        
    </div> <!-- /navbar-inner -->
    
</div>

        <div id="content">

        <div class="container">

            <div class="row">

                <div class="span3">

                    <div class="account-container">
<?php   if (Auth::user()) {
    
?>
                        <div class="account-avatar">
                        {{HTML::image('packages/bootstrap/img/login.png','',array('class'=>'thumbnail'))}}
                            <!--<img src="packages/bootstrap/img/login.png" alt="" class="thumbnail" />-->
                        </div> <!-- /account-avatar -->

                        <div class="account-details">
                            Welcome,

                            @if(Auth::user()->level == 0)
                            <span class="account-name">Administrator</span>
                            @endif
                            @if(Auth::user()->level == 1)
                            <span class="account-name">Pharmacy</span>
                            @endif
                            @if(Auth::user()->level == 2)
                            <span class="account-name">Lab Technician</span>
                            @endif
                            @if(Auth::user()->level == 3)
                            <span class="account-name">Receptionist</span>
                            @endif
                            @if(Auth::user()->level == 4)
                            <span class="account-name">Doctor</span>
                            @endif
                            @if(Auth::user()->level == 6)
                            <span class="account-name">Nurse</span>
                            @endif
                            @if(Auth::user()->level == 7)
                            <span class="account-name">HR Officer</span>
                            @endif
                            <span class="account-actions">
                                <a style="color:#888; text-decoration:none;" href="{{url("logout")}}"><i class="icon-off"></i> Logout</a>
                            </span>

                        </div> <!-- /account-details -->

                    </div> <!-- /account-container -->

                    <hr />
                     <?php }else
          ?> 