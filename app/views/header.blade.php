    <div class="navbar navbar-fixed-top">

        <div class="navbar-inner">

            <div class="container">

            	@if(Auth::user()->level == 0)
                <a class="brand" href="./index.html">Administrator</a>
                @endif

            	@if(Auth::user()->level == 1)
                <a class="brand" href="">Pharmacy</a>
                @endif
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
                            @if(Auth::user()->level == 0)
                            <span class="account-name">Administrator</span>
                            @endif
                            @if(Auth::user()->level == 1)
                            <span class="account-name">Pharmacy</span>
                            @endif

                            <span class="account-actions">
                                <a style="color:#888; text-decoration:none;" href="./logout"><i class="icon-off"></i> Logout</a>
                            </span>

                        </div> <!-- /account-details -->

                    </div> <!-- /account-container -->

                    <hr />