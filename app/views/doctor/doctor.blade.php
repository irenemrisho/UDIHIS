@extends('dashboard')
@section('main')
<h1 class="page-title">
			<i class="icon-home"></i>
			Dashboard					
		</h1>
	
		
		
								
			
												
			<div class="widget-content">
            <div class="span5">
                <div id="bar-chart" class="chart-holder"></div> <!-- /bar-chart -->
            </div>	

					
                <div class="span3">
                <div class="box">
                <div class="widget-header">
                    <span class="title">
                        <i class="icon-reorder"></i> noticeboard                    </span>
                </div>
                <div style="max-height: 500px; overflow-y: auto" class="box-content scrollable">
                
                                        <div class="box-section news with-icons">
                        <div class="avatar blue">
                            <i class="icon-tag icon-2x"></i>
                        </div>
                        <div class="news-time">
                            <span>02</span> Oct                        </div>
                        <div class="news-content">
                            <div class="news-title">
                                Health Clinic at Cox’s bazar                            </div>
                            <div class="news-text">
                                 lorem ipsum dolor sit amet..lorem ipsum dolor sit amet..lorem ipsum dolor sit amet..                            </div>
                        </div>
                    </div>
                                        <div class="box-section news with-icons">
                        <div class="avatar blue">
                            <i class="icon-tag icon-2x"></i>
                        </div>
                        <div class="news-time">
                            <span>23</span> Oct                        </div>
                        <div class="news-content">
                            <div class="news-title">
                                Workshop on first aid                            </div>
                            <div class="news-text">
                                 lorem ipsum dolor sit amet..lorem ipsum dolor sit amet..lorem ipsum dolor sit amet..                            </div>
                        </div>
                    </div>
                           
                                        
                                    </div>
                    
                </div>			
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
                text: 'Weekly Patients Visits',
                x: -20 //center
            },
            subtitle: {
                text: 'Source: Doctor',
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