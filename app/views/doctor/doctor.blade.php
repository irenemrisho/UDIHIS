@extends('dashboard')
@section('page_specific_scripts-highchart')
	<!-- Highchart includes -->
	{{HTML::script('packages/charts/js/highcharts.js')}}
	<script type="text/javascript">
			$(function () {
        $('#bar-chart').highcharts({
            chart: {
                type: 'line'
            },
            title: {
                text: 'Weekly Patients Visits'
            },
            subtitle: {
                text: 'Source: Doctor'
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
<h1 class="page-title">
			<i class="icon-home"></i>
			Dashboard					
		</h1>
	
		
		
								
			<div class="widget-header">
				<i class="icon-signal"></i>
				<h3>Weekly patients traffic</h3>
			</div> <!-- /widget-header -->
												
			<div class="widget-content">	

				<div id="bar-chart" class="chart-holder"></div> <!-- /bar-chart -->				
			</div> <!-- /widget-content -->
		
@stop