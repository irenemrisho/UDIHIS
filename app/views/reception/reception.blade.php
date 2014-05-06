@extends('dashboard')
@section('main')
<h3 class="page-title"><i class="icon-info-sign"></i>Receptionist dashboard</h3>
   
   <div class="widget-content">
		<div class="container-fluid padded">
            <div class="container-fluid padded">
				<div class="row-fluid">
			        <div class="span30">
			            <div class="action-nav-normal">
			                <div class="row-fluid">
			                    <div class="span3 action-nav-button">
			                        <a href="appointment">
			                        <i class="icon-exchange"></i>
			                        <span>appointment</span>
			                        </a>
			                    </div>
			                    <div class="span3 action-nav-button">
			                        <a href="manage/patients">
			                        <i class="icon-user"></i>
			                        <span>patient</span>
			                        </a>
			                    </div>
			                    <div class="span3 action-nav-button">
			                        <a href="reports">
			                        <i class="icon-reorder"></i>
			                        <span>Patient report</span>
			                        </a>
			                    </div>
			                    <div class="span3 action-nav-button">
			                        <a href="#">
			                        <i class="icon-hospital"></i>
			                        <span>Archives</span>
			                        </a>
			                    </div>
			                </div>
			            </div>
			        </div>
        		</div>
        	</div>		<!---DASHBOARD MENU BAR ENDS HERE-->
    	</div> 
    	</div>

@stop