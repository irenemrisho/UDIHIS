<?php

	

	$student_male   = 0;
	$student_female = 0;
	$staff_male      = 0;
	$staff_female    = 0;
	$family_male     = 0;
	$family_female   = 0;
	$private_male    = 0;
	$private_female  = 0;

	foreach($reports as $report){
		
		$category = $report->designation;
		
		if($category == "Student"){
			$gender = $report->gender;
			if($gender == "Male"){
				$student_male = $student_male + 1;
			}else{
				$student_female = $student_female + 1;
			}
		}elseif($category == "Staff"){
			$gender = $report->gender;
			if($gender == "Male"){
				$staff_male = $staff_male + 1;
			}else{
				$staff_female = $staff_female + 1;
			}
		}elseif($category == "FamilyMember"){
			$gender = $report->gender;
			if($gender == "Male"){
				$family_male = $family_male + 1;
			}else{
				$family_female = $family_female + 1;
			}
		}elseif($category == "Private"){
			$gender = $report->gender;
			if($gender == "Male"){
				$private_male = $private_male + 1;
			}else{
				$private_female = $private_female + 1;
			}
		}
	
	}

?>



<div class="widget-content" style="padding:10px;">


	<br/>

	<table id="reporttable" class="table table-striped table-bordered" cellpadding="0" cellspacing="0" border="0">
		<thead>
			<tr>
				<th style="text-align:center;">Category</th>
				<th style="text-align:center;" colspan="2">Student</th>
				<th style="text-align:center;" colspan="2">Staff</th>
				<th style="text-align:center;" colspan="2">FamilyMember</th>
				<th style="text-align: center" colspan="2">Private</th>
				<th style="text-align: center" colspan="2">Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style="">Sex</td>
				<td style="">Male</td>
				<td style="">Female</td>
				<td style="">Male</td>
				<td style="">Female</td>
				<td style="">Male</td>
				<td style="">Female</td>
				<td style="">Male</td>
				<td style="">Female</td>
				<td style="">Male</td>
				<td style="">Female</td>
			</tr>			
			<tr>
				<td style="">Subtotal</td>
				<td style="">{{$student_male}}</td>
				<td style="">{{$student_female}}</td>
				<td style="">{{$staff_male}}</td>
				<td style="">{{$staff_female}}</td>
				<td style="">{{$family_male}}</td>
				<td style="">{{$family_female}}</td>
				<td style="">{{$private_male}}</td>
				<td style="">{{$private_female}}</td>
				<td style="">{{($student_male + $staff_male + $family_male + $private_male)}}</td>
				<td style="">{{($student_female + $staff_female + $family_female + $private_female)}}</td>
			</tr>
			<tr>
				<td style="">Total</td>
				<td style=""  colspan="2">{{($student_male + $student_female)}}</td>
				<td style=""  colspan="2">{{($staff_male + $staff_female)}}</td>
				<td style=""  colspan="2">{{($family_male + $family_female)}}</td>
				<td style=""  colspan="2">{{($private_male + $private_female)}}</td>
				<td style=""  colspan="2">{{($student_male + $staff_male + $family_male + $private_male)+($student_female + $staff_female + $family_female + $private_female)}}</td>
			</tr>									
		</tbody>
	</table>

