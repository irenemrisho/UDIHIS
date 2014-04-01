@extends('layouts.master')
@section('content')
@include('header')
@include('sideMenu')	
<div class="span9">                                          
    @yield('main')    
</div> <!-- /content -->

@include('footer') 
@stop

