<table id="patients_table" class="table table-striped table-bordered" cellpadding="0" cellspacing="0" border="0">
															<thead>
																<tr>
																	<th style="text-align:center;">#</th>
																	<th style="text-align:center;">File Number</th>

																	<th style="text-align:center;">First Name</th>
																	<th style="text-align:center;">Last Name</th>
																	<th style="text-align:center;">Phone Number</th>
																	
																</tr>
															</thead>
															<tbody>
														<?php $patients = Patient::orderBy('filenumber', 'DESC')->get(); $id=1;?>
														@foreach($patients as $patient)
																<tr><td style="text-align:center;">{{$id}}<?php $id++; ?></td>
																	<td style="text-align:center;">{{$patient->filenumber}}</td>
																	<td style="text-align:center;">{{$patient->firstname}}</td>
																	<td style="text-align:center;">{{$patient->lastname}}</td>
																	<td style="text-align:center;">{{$patient->phone_no}}</td>
																    
																	
																</tr>
														@endforeach
															
																
																
																
																
															</tbody>
													</table>