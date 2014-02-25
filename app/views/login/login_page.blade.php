
<div class="navbar navbar-fixed-top">

    <div class="navbar-inner">

        <div class="container">
            <div class="row">
                <a class="brand" href="./login.html">UDSM Integrated Hospital Information System</a>
            </div>


        </div> <!-- /container -->

    </div> <!-- /navbar-inner -->

</div> <!-- /navbar -->




<div id="login-container">

    <center>{{HTML::image('packages/bootstrap/img/login.png')}}</center>





    <div id="login-header">

        <h3>Signin</h3>

    </div> <!-- /login-header -->


    <div id="login-content" class="clearfix">




        {{Form::open(array('url'=>'/login'))}}

        @if($errors->has())
        @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
        @endforeach
        @endif 


        <fieldset>
            <div class="control-group">
                <label class="control-label" for="username">Username</label>
                <div class="controls">
                    <input type="text" name="username" class="" id="username" placeholder="Username">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="password">Password</label>
                <div class="controls">
                    <input type="password" name="password" class="" id="password" placeholder="Password">
                </div>
            </div>
        </fieldset>

        <div id="remember-me" class="pull-left">
            <input type="checkbox" name="remember" id="remember" />
            <label id="remember-label" for="remember">Remember Me</label>
        </div>

        <div class="pull-right">
            <button type="submit" name="login" class="btn btn-primary btn-large" style="padding:6px 18px; border-radius:0px;">
                Login
            </button>
        </div>
        </form>

    </div> <!-- /login-content -->


    <div id="login-extra">
        <p><a href="forgot_password.html">Forgot Password? </a></p>			
    </div> <!-- /login-extra -->
    <div id="rights" style="text-align:center;">
        ©13-14 UDIHIS
    </div>


</div> <!-- /login-wrapper -->

