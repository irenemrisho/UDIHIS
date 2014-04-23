    <div class="navbar navbar-fixed-top">

        <div class="navbar-inner">

            <div class="container">
<a class="brand" href="">UDSM Integrated Hospital Information System</a>    
                <div class="nav-collapse">
           

                </div> <!-- /nav-collapse -->

            </div> <!-- /container -->

        </div> <!-- /navbar-inner -->

    </div> <!-- /navbar -->
        <div id="content">

        <div class="container">

            <div class="row">

                <div class="span3">

                    <div class="account-container">
<?php   if (Auth::user()) {
    
?>
                        <div class="account-avatar">
                            <img src="./img/" alt="" class="thumbnail" />
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
     
                            <span class="account-actions">
                                <a style="color:#888; text-decoration:none;" href="{{url("logout")}}"><i class="icon-off"></i> Logout</a>
                            </span>

                        </div> <!-- /account-details -->

                    </div> <!-- /account-container -->

                    <hr />
                     <?php }else
          ?> 