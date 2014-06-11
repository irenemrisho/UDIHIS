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
                text: 'Weekly Average Attendance'
            },
            subtitle: {
                text: 'Source: HR Office'
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
                name: 'Doctors',
                data: [12, 15, 19, 23, 28, 32, 38]
            }, 	{
                name: 'Nurses',
                data: [7, 6, 9, 14, 18, 21, 25]
            },
            	{
                name: 'Technicians',
                data: [3, 4, 5, 8, 11, 15, 17]
            }]
        });
    });
	</script>
@stop

@section('main')
<h3 class="page-title"><i class="icon-info-sign"></i>HR Officer dashboard</h3>
   
   <div class="widget-content">
		<div class="container-fluid padded">
            <div class="container-fluid padded">
				<div class="row-fluid">
			        <div class="span30">
			            <div class="action-nav-normal">
			                <div class="row-fluid">
			                    <div class="span3 action-nav-button">
			                        <a href="{{url("hr/person")}}">
			                        <i class="icon-user"></i>
			                        <span>Register Employee</span>
			                        </a>
			                    </div>
			                    <div class="span3 action-nav-button">
			                        <a href="{{url("hr/manage_person")}}">
			                        <i class="icon-user"></i>
			                        <span>Manage Employee</span>
			                        </a>
			                    </div>
			                    <div class="span3 action-nav-button">
			                        <a href="#">
			                        <i class="icon-hospital"></i>
			                        <span>Manage Report</span>
			                        </a>
			                    </div>
			                    <div class="span3 action-nav-button">
			                        <a href="#">
			                        <i class="icon-reorder"></i>
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
<<<<<<< HEAD
                                <?php $notice = Notification::all(); ?>
                                @foreach($notice as $notice)
                                <tr><td>{{$notice->message}}</td>
                                    <td>{{$notice->date}}</td>
                                </tr>
                                @endforeach
=======
                                  <?php $notice=Notification::orderBy('id', 'DESC')->get()->take(5); ?>
                                  @foreach($notice as $notice)
                                  <tr>
                                    <td>{{$notice->message}}</td>
                                    <td>{{$notice->date}}</td>
                                  </tr>
                                  @endforeach
>>>>>>> 7666e62f792ff3269c92f846860c449000b2d54a
                                </tbody>
                            </table>
                        </div>
                    </div>
	    		</div>
	    	</div>



    </div>

@stop