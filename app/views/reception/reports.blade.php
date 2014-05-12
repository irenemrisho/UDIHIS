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
									Gender:
									<select id="gender" style="width:80px">
										<option></option>
										<option>all</option>	
										<option>male</option>	
										<option>female</option>	
									</select>
									Age:
									<select id="age"  style="width:80px">
										<option></option>
										<option>all</option>	
										<option>children</option>	
										<option>Adults</option>	
										<option>Elders</option>	
									</select>
									District:
									<select id="district" style="width:80px">
										<option></option>
										<option>all</option>	
										<option>Kinondoni</option>	
										<option>Temeke</option>	
										<option>Ilala</option>	
									</select>
									Report type:
									<select id="reporttype" style="width:80px">
										<option></option>
										<option>Table</option>	
										<option>Pie</option>	
										<option>Column</option>	
										<option>Line</option>	
									</select>
									Report:
									<select id="report"  style="width:80px">
										<option></option>
										<option>daily</option>	
										<option>weekly</option>	
										<option>monthly</option>	
										<option>Yearly</option>	
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
							</div>
						</div>
					</div>
				</div>
	</div>	



@stop