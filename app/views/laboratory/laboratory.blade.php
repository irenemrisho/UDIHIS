@extends('dashboard')
@section('main')
<h1 class="page-title">
			<i class="icon-home"></i>
			Dashboard					
		</h1>
	
		
		
								
			<div class="widget-header">
				<i class="icon-signal"></i>
				<h3>Test Stats</h3>
			</div> <!-- /widget-header -->
												
			<div class="widget-content">					
				<div id="bar-chart" class="chart-holder"></div> <!-- /bar-chart -->				
			</div> <!-- /widget-content -->

@stop
@section('page_specific_scripts-highchart')
	<!-- Highchart includes -->
	{{HTML::script('packages/charts/js/highcharts.js')}}
	{{HTML::script('packages/charts/js/modules/exporting.js')}}
	<script type="text/javascript">	
		
$(function () {
	
        $('#bar-chart').highcharts({
             chart: {
                type: 'column'
            },
            title: {
                text: 'Weekly Tested Patients',
                x: -20 //center
            },
            subtitle: {
                text: 'Source: {{Auth::User()->first_name}}',
                x: -20
            },
            xAxis: {
                categories: ['Mon', 'Tue', 'Wed', 'Thurs', 'Fri', 'Sat',
                    'Sun']
            },
            yAxis: {
                title: {
                    text: 'Number (#)'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: ''
            },
            
            
	        
            series: [{
                name: 'Male',
                data: [15, 29, 19, 14, 18, 21, 25]
            }, {
                name: 'Female',
                data: [10, 12, 23, 26, 17.0, 22, 24]
            }, {
                name: 'Children',
                data: [20, 16, 7, 8, 13, 17, 30]
            }]
        });
    });

	</script>
@stop