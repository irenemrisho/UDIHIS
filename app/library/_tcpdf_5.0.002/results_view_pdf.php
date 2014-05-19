<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
	if(!isset($_SESSION['user_id'])){
	redirect_to("index.php");
	}
	$School_array=array();
	$School_array=mysql_fetch_array(get_head_master($_SESSION['user_id']));
?>
<?php find_selected(); 
//
 set_time_limit(0);
$defaults_yr_term=array();
		$defaults_yr_term=mysql_fetch_array(get_default_academic_term($_SESSION['term']));
		$default_Academic_id=$defaults_yr_term['Academic_id'];
		$default_Term_value=$defaults_yr_term['Term_value'];
		$default_Term_sDate=$defaults_yr_term['Start_date'];
		$default_Term_eDate=$defaults_yr_term['End_date'];

//
$reg_totals=array();
$num=0;
$class_id=$sel_class['Class_id'];
$results_receiver=array();
$results_message=array();
$RClass=$sel_class['Class_id'];
$reg_totals=get_student_average_class($RClass);
$num=mysql_num_rows($reg_totals);

?>
<style type="text/css">
<!--
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }
}
-->
</style>
<page backcolor="#FEFEFE" backimg="./res/bas_page.png" backimgx="center" backimgy="bottom" backimgw="100%" backtop="0" backbottom="30mm" footer="date;heure;page" style="font-size: 12pt">
    <bookmark title="Lettre" level="0" ></bookmark>
	<?php
    
	for($i=1; $i<=$num;  $i++){ 
	$course_set=get_all_courses($class_id);
 $course_num=mysql_num_rows($course_set);
 $reg_total = mysql_fetch_array($reg_totals);
 $reg_num=$reg_total['Reg_number'];
 $stud_names=get_student_names_by_reg($reg_num,$sel_class['Class_id']);
   $stud_name = mysql_fetch_array($stud_names);
   $stud_results=array();
 $stud_results_cat=get_student_results_cat($reg_num);
 
 $stud_results_exam=get_student_average_results_exam($reg_num);
	?>
      <nobreak>
	  
     <table cellspacing="0" style="padding: 1px; width: 80%; border: solid 2px #000000; font-size: 11pt; ">
                    <tr>
                        <th style="width: 100%; text-align: center; border: solid 1px #000000;" colspan="6">
                            Report Card
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100%; text-align: left; border: solid 1px #000000;" colspan="6">
                      <table cellspacing="0" style="width: 100%; text-align: left; font-size: 10pt">
                    <tr>
						<td style="width: 60%">
						
                    Names: &nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $stud_name['names'];?></b><br/>
			
					Registration number: <b><?php echo $reg_num;?></b>
                        </td>
                        <td style="width: 40%">
                            Class:&nbsp;<?php echo "Senior {$sel_class['Senior']} , {$sel_class['Class_name']}" ; ?><br>
                            Academic year:&nbsp;<?php echo substr($default_Term_sDate,0,4)."-".substr($default_Term_eDate,0,4);?><br>
                            Term:&nbsp;<?php echo $default_Term_value;?><br>
                        </td>
                    </tr>
                </table>
					
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 25%; border: solid 1px #000000;">Course Name</th>
                        <th style="width: 15%; border: solid 1px #000000;">Cat</th>
                        <th style="width: 15%; border: solid 1px #000000;">Exam</th>
						<th style="width: 15%; border: solid 1px #000000;">Total</th>
                        <th style="width: 15%; border: solid 1px #000000;">Max</th>
						<th style="width: 15%; border: solid 1px #000000;">Percentage</th>
                    </tr>
					<?php
$j=0;	
					while($course=mysql_fetch_array($course_set)){
					$cat=(array_key_exists($course['Course_id'],$stud_results_cat))?round($stud_results_cat[$course['Course_id']],1):""; 
					$exam=(array_key_exists($course['Course_id'],$stud_results_exam))?round($stud_results_exam[$course['Course_id']],1):""; 
					$total=$cat+$exam;
					$percentage=round(($total/$course['max_marks'])*100,4);
					
?>
                    <tr>
                        <td style="width: 25%; border: solid 1px #000000;"><?php echo "{$course['Course_name']}";?></td>
                        <td style="width: 15%; border: solid 1px #000000;text-align: left;"><?php echo $cat;?></td>
                        <td style="width: 15%; border: solid 1px #000000;text-align: left;"><?php echo $exam;?></td>
                        <td style="width: 15%; border: solid 1px #000000;text-align: left;"><?php echo round($total,1);?></td>
						<td style="width: 15%; border: solid 1px #000000;text-align: left;"><?php echo "{$course['max_marks']}";?></td>
						<td style="width: 15%; border: solid 1px #000000;text-align: left;"><?php echo round($percentage,2);?></td>
					</tr>

               <?php 
			   			$j++;
}
			   ?>
					
                    <tr>
                        <td style="width: 25%; border: solid 1px #000000;"colspan="3">&nbsp;Total Percentage:&nbsp;&nbsp;<b><?php echo round($reg_total['ResAvg'],2);?>&nbsp;%</b></td>
                     
                        <td style="width: 15%; border: solid 1px #000000;"colspan="3">&nbsp;Place:&nbsp;&nbsp;<b><?php echo $i."/".$num; ?></b></td>
                       
                    </tr>
</table>
<br>
  
       <table cellspacing="0" style="width: 90%; text-align: left;font-size: 10pt;" >
			<tr>
                <td style="width:40%;"></td>
                <td style="width:60%; ">
                    <?php echo $School_array['names']; ?><br>
                   Headmaster at <?php echo $School_array['School_Name']; ?><br>
               
                </td>
            </tr>
			<tr style="font-size: 8pt">
                <td style="width: 100%; text-align: left;" colspan="2">
                    Report card generated by academicbridge software powered  by Black and Blue International Limited
                </td>
               
            </tr>
        </table>
    </nobreak>
	<br>
	 <?php } ?>
</page>