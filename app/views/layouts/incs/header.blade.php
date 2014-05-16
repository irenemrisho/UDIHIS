
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>UDIHIS</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">   
    <!-- bootstrap includes --> 
    {{HTML::style('packages/bootstrap/css/bootstrap.min.css')}}
    {{HTML::style('packages/bootstrap/css/bootstrap-responsive.min.css')}}
    {{HTML::style('packages/bootstrap/css/font-awesome.min.css')}}
    {{HTML::style('packages/bootstrap/css/style.css')}}
    {{HTML::style('packages/bootstrap/css/style-responsive.css')}}
    {{HTML::style('packages/bootstrap/css/login.css')}}
    {{HTML::style('packages/bootstrap/css/dashboard.css')}}
    {{HTML::style('packages/bootstrap/css/easyWizard.css')}}
    {{HTML::style('packages/bootstrap/css/ui.css')}}

    {{HTML::style('packages/bootstrap/css/timepicker.css')}}

    @yield('page_specific_css')

    {{HTML::style('packages/bootstrap/css/bootstrap-tokenfield.css')}}
    {{HTML::style('packages/bootstrap/css/tokenfield-typeahead.css')}}
    

    @yield('page_specific_css')    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
  
    
    
   

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
  </head>

<body>