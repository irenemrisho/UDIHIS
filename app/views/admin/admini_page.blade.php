

    <div class="navbar navbar-fixed-top">

        <div class="navbar-inner">

            <div class="container">

                <a class="brand" href="./index.html">Administrator</a>

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

                        <div class="account-avatar">
                            <img src="./img/" alt="" class="thumbnail" />
                        </div> <!-- /account-avatar -->

                        <div class="account-details">
                            Welcome,
                            <span class="account-name">Administrator</span>

                            <span class="account-actions">
                                <a style="color:#888; text-decoration:none;" href="./login.html"><i class="icon-off"></i> Logout</a>
                            </span>

                        </div> <!-- /account-details -->

                    </div> <!-- /account-container -->

                    <hr />

                    <ul id="main-nav" class="nav nav-tabs nav-stacked">

                        <li class="active">
                            <a href="./index.html">
                                <i class="icon-home"></i>
                                Dashboard 		
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon-exchange"></i>
                                Manage user	
                            </a>
                        </li>

             

                        <li>
                            <a href="reports.html">
                                <i class="icon-hospital"></i>
                                Setting
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-user"></i>
                                My account
                            </a>
                        </li>


                    </ul>	

                    <hr />

                    <div class="sidebar-extra">
                        <p></p>
                    </div> <!-- .sidebar-extra -->

                    <br />

                </div> <!-- /span3 -->



                <div class="span9">

                    <h1 class="page-title">
                        <i class="icon-user-md"></i>
                        Patients					
                    </h1>

                    <div class="action-nav-normal">
                        <div class="row">



                        </div> <!-- /stat-container -->

                        <div class="widget-header">
                    
                           
                           
                            {{HTML::link('/users/add', 'Add')}}
 
</div>
                            <div class="dropdown">
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                   

                        </div> <!-- /widget-content -->





                    </div> <!-- /span9 -->


                </div> <!-- /row -->

            </div> <!-- /container -->

        </div> <!-- /content -->


        <div id="footer">

            <div class="container">		

                <div class="row">

                    <div id="attribution" class="span6">

                    </div> 

                </div> <!-- /.row -->
            </div> <!-- /container -->

        </div> <!-- /footer -->

