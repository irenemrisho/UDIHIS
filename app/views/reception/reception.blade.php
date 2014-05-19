@extends('dashboard')

@section('page_specific_scripts-highchart')
	<!-- Highchart includes -->
	{{HTML::script('packages/charts/js/highcharts.js')}}
	<script type="text/javascript">
			$(function () {
        $('#container').highcharts({
            chart: {
                type: 'line'
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
                data: [12.0, 15.9, 19.5, 23.5, 28.4, 32.5, 38.2]
            }, 	{
                name: 'Female',
                data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2]
            },
            	{
                name: 'Children',
                data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0]
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
	    			Chart will appera here!
	    		</div>
	    	</div>



    </div>

@stop