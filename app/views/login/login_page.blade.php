@extends('layouts.master')
@section('content')
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


        <fieldset>
         @if($errors->any())
            {{ implode('', $errors->all('<div class="alert alert-warning alert-dismissable">:message</div>') ) }}
        @endif

        @if(isset($emsg))
            <div id="alert" class="alert alert-danger alert-dismissable">{{$emsg}}</div>
        @endif


            <div class="control-group">

                <label class="control-label" for="username">Username</label>
                <div class="controls">
                    <input type="text"  name="username" class="" id="" placeholder="Username" required />

                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="password">Password</label>
                <div class="controls">
                    <input type="password"  name="password" class="" id="password" placeholder="Password" required />
                </div>
            </div>
        </fieldset>

        <div id="remember-me" class="pull-left">
            
        </div>

        <div class="pull-right">
            <button type="submit" name="login" class="btn btn-primary btn-large" >
                Login
            </button>
        </div>
        </form>

    </div> <!-- /login-content -->


    <div id="login-extra">
        		
    </div> <!-- /login-extra -->
    


</div> <!-- /login-wrapper -->
@stop

