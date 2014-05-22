@extends('dashboard')

@section('page_specific_scripts-highchart')
	<!-- Highchart includes -->
	{{HTML::script('packages/charts/js/highcharts.js')}}
	<script type="text/javascript">
			$(function () {
        $('#container').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Weekly Average Registration'
            },
            subtitle: {
                text: 'Source: Reception'
            },
            xAxis: {
                categories: ['Mon', 'Tue', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun']
            },
            yAxis: {
                title: {
                    text: 'Number (#)'
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Male',
                data: [12, 15, 19, 23, 28, 32, 38]
            }, 	{
                name: 'Female',
                data: [7, 6, 9, 14, 18, 21, 25]
            },
            	{
                name: 'Children',
                data: [3, 4, 5, 8, 11, 15, 17]
            }]
        });
    });
	</script>
@stop

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
    	<hr>
    		<div class="row-fluid">

	    		<div class="span7">
	    			<div id="container" style="width:100%; height:400px;">
	    			</div>
	    		</div>

	    		<div class="span5">
	    			<div class="widget widget-table">
                        <div class="widget-header">
                            <span class="title"><i class="icon-tasks"></i></span>  Notifications
                        </div>
                        <div class="widget-content" style="padding:px20;">
                            <table class="table table-bordered">
                                <colgroup>
                                  <col class="span4">
                                  <col class="span1">
                                </colgroup>
                                <thead>
                                  <tr>
                                    <th>Message</th>
                                    <th>Schedule</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>HR make a new roster. All nurses should be on roaster this weekend</td>
                                    <td>Sat 12</td>
                                  </tr>
                                  <tr>
                                    <td>Board embers meeting. All doctors and head of section meeting</td>
                                    <td>Mon 24</td>
                                  </tr>
                                  <tr>
                                    <td>General facility cleanliness. All nurses and should participate in each section</td>
                                    <td>Fri 29</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
	    		</div>
	    	</div>



    </div>

@stop