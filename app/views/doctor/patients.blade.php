@extends('dashboard')
@section('main')
				
				<h1 class="page-title">
					<i class="icon-user-md"></i>
					Patients
					<div class="pull-right">
					<input type="search" class="form-control" placeholder="search patients" style="text-align:center; padding-top:4px">

					</div>
										
				</h1>
				
				<div class="action-nav-normal">
				   <div class="row">
					
					
					
				</div> <!-- /stat-container -->
										
					<div class="widget-header">
						<i class="icon-th-list"></i>
						<h3>Manage patients records</h3>
					</div> <!-- /widget-header -->
					
					<div id="content1" class="widget-content">
					
						<?php	
						$patients = Patient::paginate(5);
							
						?>
						<table id="patients" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Contact</th>
									
									<th>&nbsp;</th>
								</tr>
							</thead>
							
							<tbody>
						
						@foreach($patients as $patient)
								<tr><td>{{$patient->id}}</td>
									<td>{{$patient->first_name}}</td>
									<td>{{$patient->middle_name}}</td>
									<td>{{$patient->contact}}</td>
									<td></td>
									
									<td class="action-td">
										<a href="#myModal" role="button" class="btn" data-toggle="modal">Consult</a>
									</td>
								</tr>
						@endforeach
							
								
								
								
								
							</tbody>
						</table>
						<?php echo $patients->links(); ?>

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">{{$patient->first_name}}</h3>
</div>
<div class="modal-body">
<textarea></textarea>



</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button class="btn btn-primary">Lab test</button>
</div>
</div>
					
					</div> <!-- /widget-content -->
														
					
							
					
				
			</div> <!-- /span9 -->
<script type="text/javascript">
    $(document).ready(function(){
        
            $('#patients').dataTable();
          
    });
    </script>
		@stop

