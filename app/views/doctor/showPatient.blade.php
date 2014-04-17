							<table class="table table-striped">
								<thead>
										<tr>
											<th>File Number</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Payment Type</th>
											 <th>Blood Group</th>
											 
											
											<th>&nbsp;</th>
										</tr>
									</thead>
									
										<tr>
										<td>{{ $patient->filenumber}}</td>
										<td>{{ $patient->firstname}}</td>
										<td>{{ $patient->lastname}}</td>
										<td>{{ $patient->paymenttype}}</td>
										<td>{{ $patient->bloodgroup}}</td>
										

									</tr>
									<thead>	
										<tr>
											<th>Rhesus</th>
											 <th>Birth Date</th>
											 <th>Weight</th>
											 <th>Allergy</th>
											 <th>Gender</th>
										</tr>
								</thead>
															


									
									<tr >
										<td>{{ $patient->rhesus}}</td>
										<td>{{ $patient->birth}}</td>
										<td>{{ $patient->weight}}</td>
										<td>{{ $patient->alergy}}</td>
										<td>{{ $patient->gender}}</td>
									</tr>
											

							    		

							</table>

								
								<label class="control-label" for="">Consultation Notes</label>

									<textarea rows="2" class="form-control"></textarea>	