@extends('dashboard')
@section('main')
	
				
				<h1 class="page-title">
					<i class="icon-th-large"></i>
					Reports					
				</h1>
				
				
				<div class="row">
					
					<div class="span9">
				
						
							
							<div class="widget-header">
								<h3>Basic Reports</h3>
							</div> <!-- /widget-header -->
									
							<div class="widget-content">
								<form class="form-horizontal" id="iload">
									Reporting period From:
									<span id="date" >
										<input type="text" id="From" style="width:120px" placeholder="Enter date" />
									</span>
									To:
									<span id="date" >
										<input type="text" id="To" style="width:120px" placeholder="Enter date" />
									</span>
									Report type:
									<select id="reporttype" style="width:120px">
										<option></option>
										<option>Table</option>	
											
									</select>
									<span id="date" style="display:none">
										<input type="text" id="dt" style="width:80px" placeholder="Enter date" />
									</span>
									<button class="btn" id="go" type="button">
										Go
									</button>
								</form>
								<center style="display:none" id="loader">{{HTML::image('packages/bootstrap/img/load.gif')}}</center>
								<div id="ireport"></div>
								<div id="container"></div>
							</div>
						</div>
					</div>
				</div>
	</div>	



@stop