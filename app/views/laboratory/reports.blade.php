@extends('dashboard')
@section('main')
	
				
				<h1 class="page-title">
					<i class="icon-th-large"></i>
					Reports					
				</h1>
				
				
				<div class="row">
					
					<div class="span9">
				
						
							
							<div class="widget-header">
								<h3>Tested Patients</h3>
							</div> <!-- /widget-header -->
									
							<div class="widget-content">
								<div class="tabbable">
									<ul class="nav nav-tabs">
									  <li class="active">
									    <a href="#1" data-toggle="tab">Weekly</a>
									  </li>
									  <li class=""><a href="#2" data-toggle="tab">Monthly</a></li>
									  <li class=""><a href="#3" data-toggle="tab">Yearly</a></li>
									</ul>

									<div class="tab-content">
										<div class="tab-pane active" id="1">
											<div class="widget widget-table">
												<div class="widget-header">
													<i class="icon-th-list"></i>
													<h3>Weekly Statistics</h3>
												</div> <!-- /widget-header -->
												<div class="widget-content">
												
												
												</div> <!-- /widget-content -->
											</div> <!-- /widget -->
										</div>
										
										<div class="tab-pane" id="2">
											<div class="widget widget-table">
												<div class="widget-header">
													<i class="icon-th-list"></i>
													<h3>Monthly Statistics</h3>
												</div> <!-- /widget-header -->
												<div class="widget-content">
												
												
												</div> <!-- /widget-content -->
											</div> <!-- /widget -->
										</div>

										<div class="tab-pane" id="3">
											<div class="widget widget-table">
												<div class="widget-header">
													<i class="icon-th-list"></i>
													<h3>Yearly Statistics</h3>
												</div> <!-- /widget-header -->
												<div class="widget-content">
												
												
												</div> <!-- /widget-content -->
											</div> <!-- /widget -->
										</div>
										
									</div>	
							</div>
						</div>
					</div>
				</div>
	</div>	

@stop