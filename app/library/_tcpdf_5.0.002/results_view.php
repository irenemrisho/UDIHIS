
<?php include("includes/header.php");?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
	if(!isset($_SESSION['user_id'])){
	redirect_to("index.php");
	}
?>

<?php find_selected(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<table cellspacing="0" id= "structure">
	
	<tr id="nav" cellspacing="0" cellpadding="0" border="0" height=30px width=100% >
		<td id="nav_left" width=60%>
	<h4><i>Welcome</i> , <?php echo "{$_SESSION['username']}"; ?> </h4>
		
    </td>
		<td id="nav_right" width=40%>
							  
					<div id="tw-form-outer">
<form action="search.php?" method="post" id="tw-form">    
	<input type="text" id="tw-input-text" name="search" placeholder="Search for student name ,registration number or phone number  " required onfocus="if(this.value=='search'){this.value='';}" onblur="if(this.value==''){this.value='search';}" /> 
    <input type="submit" id="tw-input-submit" value="" /> 
</form>
</div>
		
	<a href='change_password.php'><b>Change password</b></a>
		&nbsp;<b>|</b>&nbsp;<a href="logout.php"><b>Logout</b></a>
	</td>	
	</tr>
<tr id="nav" cellspacing="0" cellpadding="0" border="0" height=20px width=100% >
<td id="nav_left">

<b><i><a href='file2SMS.php?'><img src="images/png/share_2_icon&16.png">&nbsp;File to SMS</a><i></b>&nbsp;&nbsp;&nbsp;&nbsp;
<b><i><a href='set_fees_term.php'><img src="images/png/shopping_bag_dollar_icon&16.png">&nbsp;Set School fees</a><i></b>

	</td>
<td>
<i>you are here:</i>&nbsp;<a href="profile.php" ><b>Home</a>&nbsp;&#62;&nbsp;<a href="class.php?class=<?php echo $sel_class['Class_id']; ?>"><?php echo "Senior {$sel_class['Senior']} , {$sel_class['Class_name']}" ; ?> </a>&nbsp;&#62;&nbsp;View results</b> 
							   
		<span style="float:right;"><a href="buyCredit.php">&nbsp;<b>|</b>&nbsp;<b>Buy SMS</b>&nbsp;&nbsp;</a></span>
		
		<div class="balance">
      <div>See Balance</div>
      <span>
        <b><?php getLeftSMS();?></b>
      </span>
      
    </div>

</td>
</tr>
	<tr id="working_nav">
<td id="working_left_nav" valign=top>

	<?php if(!is_null($sel_class)){ ?>
						
						
		<?php			
					right_navigation();
		?>
					<?php }?>
	
					
					
					

</td>
<td   valign=top >

<table cellspacing="0" cellpadding="0" border="0" width=970>
<tr>


					
</tr>
						<tr >
				<td>

				<div id="main-container">
				
				<?php if(isset($_GET['scc'])==2){?>
				
				
				  	<?php if(count($_SESSION['Rreceivers'])==count($_SESSION['Rmessages'])){
$msg_to=array();
$numbers =array();


$Rmsg_to=$_SESSION['Rmessages'];
$Rnumbers=$_SESSION['Rreceivers'];	
$Rnum=count($Rnumbers);


 
 if($Rnum>0){
    $smsNBER=0;
 echo "<h3>SMS report:</h3>";
 echo "<div id= \"list_table\" cellspacing=\"0\" >";
echo "<link rel=\"stylesheet\" href=\"stylesheets/tableS.css\" type=\"text/css\" media=\"screen\" />";		
echo "<table  cellspacing='0' cellpadding='0' width=100%> <tr style=\"height:35px\">";
echo "<tr style=\"height:35px\">";
					echo "<th style=\"width:10%\">receiver</th><th style=\"width:10%\">Message Status</th>";
					echo "</tr>";
set_time_limit(0);
for($k=1; $k<=$Rnum; $k++){
$Rindex=$k-1;
 $Rreceiver = $Rnumbers[$Rindex] ;
 $Rmsg=$Rmsg_to[$Rindex];


 
if(($k%2)==0) {
 echo "<tr class=\"firstrow\">";
 }else{
 echo "<tr class=\"secondrrow\">"; 
 }
 


					
   if($Rreceiver!=null){
   
	
 $_GET['$phoneNumber']=$Rreceiver;
 $_GET['$message'] =$Rmsg;
$_GET['$source']="acabridge";

	

 echo "<td>{$Rreceiver}</td>";
 
include("submitsms.php");
			$status=array();	
			$status=explode("|",$resp);
			if($status[0]=="1701"){
			
			
			echo "<td class=\"sent\">sent</td>";

			}
			elseif($status[0]!="1701"){
					 $smsNBER++;
			
			echo "<td class=\"failed\">Not sent</td>";
			
			}
 }else{
 echo "<td class=\"failed\ >Not found</td>";
 echo "<td class=\"failed\ >Not sent</td>";
 
 }
 echo "</tr>";
	
	}
	  updateNberSMS($smsNBER);
	echo "</table>";
	}elseif($Rnum<1){
		echo "<div id=\"error_notification\">";
					echo "<i>No receiver found in this class</i>";
echo "</div>";
			
			}
	
	
	 } ?>
				
				
				
				
				<?php }else{?>
<h2><?php echo "Senior {$sel_class['Senior']} , {$sel_class['Class_name']}" ;?></h2>
				<?php 
				


if(isset($_GET['smsg'])){

if($_GET['smsg']==1){
			echo "<div id=\"success_notification\">";
					echo "<i>Message successfully sent </i>";
echo "</div>";
			}
			elseif($_GET['smsg']==2){
			
			echo "<div id=\"error_notification\">";
					echo "<i>Message failed</i>";
echo "</div>";
			
			}

}
// get average of each student  ascending order by total
$reg_totals=array();
$num=0;
$class_id=$sel_class['Class_id'];
$results_receiver=array();
$results_message=array();
$RClass=$sel_class['Class_id'];
$reg_totals=get_student_average_class($RClass);
$num=mysql_num_rows($reg_totals);

if($num<1){

 echo "Results Not found,Click <a href=\"upload.php?class={$sel_class['Class_id']}\">here</a> to Upload results";
}else{
 echo "<div class=\"scrollable2\">";
}
?>

<?php
for($i=1; $i<=$num; $i++){
$course_set=get_all_courses($class_id);
 $course_num=mysql_num_rows($course_set);
 $reg_total = mysql_fetch_array($reg_totals);
 $reg_num=$reg_total['Reg_number'];
 $stud_names=get_student_names_by_reg($reg_num,$sel_class['Class_id']);
   $stud_name = mysql_fetch_array($stud_names);
   $stud_results=array();
 $stud_results_cat=get_student_results_cat($reg_num);
 
 $stud_results_exam=get_student_average_results_exam($reg_num);

 echo "<div id=\"report-container\">";
 

  //form a msg contains a results of the students
  $msg="{$stud_name['names']}'s results: ";
  $total_cat=0;
  $total_exam=0;
  $total_max=0;
  $total_all=0;
 ?>
 
   <table cellspacing="0" style="padding: 1px; width: 80%; border: solid 2px #000000; font-size: 11pt; ">
                    <tr>
                        <th style="width: 100%; text-align: center; border: solid 1px #000000;" colspan="6">
                            Report Card
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100%; text-align: left; border: solid 1px #000000;" colspan="6">
                      
					Names: &nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $stud_name['names'];?></b><br/>
			
					Registration number: <b><?php echo $reg_num;?></b>
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
					$course_max=$course['max_marks'];
					$total_cat+=$cat;
					$total_exam+=$exam;
					$total_max+=$course_max;
					$total=$cat+$exam;
					$total_all+=$total;
					$percentage=round(($total/$course['max_marks'])*100,4);
					
?>
                    <tr>
                        <td style="width: 25%; border: solid 1px #000000;"><?php echo "{$course['Course_name']}";?></td>
                        <td style="width: 15%; border: solid 1px #000000;text-align: left;"><?php echo $cat;?></td>
                        <td style="width: 15%; border: solid 1px #000000;text-align: left;"><?php echo $exam;?></td>
                        <td style="width: 15%; border: solid 1px #000000;text-align: left;"><?php echo round($total,1);?></td>
						<td style="width: 15%; border: solid 1px #000000;text-align: left;"><?php echo $course_max; ?></td>
						<td style="width: 15%; border: solid 1px #000000;text-align: left;"><?php echo round($percentage,2);?></td>
					</tr>

<?php
$msg.=$course['Course_name'].":".round($percentage,0)."%, ";
					$j++;
}
$msg.="percentage: ".round($reg_total['ResAvg'],0).", place:".$i."/".$num;
					

?>					<th style="width: 100%; text-align: center; border: solid 1px #000000;" colspan="6">
                            
                        </th>
					<tr>
                      <td style="width: 25%; border: solid 1px #000000;"><b>Total</b></td>
                        <td style="width: 15%; border: solid 1px #000000;text-align: left;"><?php echo $total_cat;?></td>
                        <td style="width: 15%; border: solid 1px #000000;text-align: left;"><?php echo $total_exam;?></td>
                        <td style="width: 15%; border: solid 1px #000000;text-align: left;"><?php echo  $total_all; ?></td>
						<td style="width: 15%; border: solid 1px #000000;text-align: left;"><?php echo $total_max; ?></td>
						<td style="width: 15%; border: solid 1px #000000;text-align: left;"><b><?php echo round($reg_total['ResAvg'],2);?></b></td>
                       
                    </tr>
                    <tr>
                        <td style="width: 25%; border: solid 1px #000000;"colspan="3">&nbsp;Conduite:&nbsp;&nbsp;<b></b></td>
                     
                        <td style="width: 15%; border: solid 1px #000000;"colspan="3">&nbsp;Place:&nbsp;&nbsp;<b><?php echo $i."/".$num; ?></b></td>
                       
                    </tr>
<?php
$index=$i-1;
	$number=get_number_reg_nber(mysql_prep($reg_num));	
	$receiver ="250".substr($number['PPN'],-9);
	$results_receiver[$index]=$receiver;
	$results_message[$index]=$msg;
					echo "<a";
					 if(is_able_sms(1)){
                                     echo " href=\"send_report.php?class={$sel_class['Class_id']}&std={$receiver}&msg={$msg}\" ";
									 }else{
									 echo " href=\"buyCredit.php?fin=1\"";
									 }
					
					
					echo " onclick =\"return confirm('Do you want to send this bulletin to parent of {$stud_name['names']} ?'); \"><br/><img style=\"vertical-align: middle\" src=\"images/png/mail_2_icon&16.png\">Send via <i>SMS</i></a>
					&nbsp;&nbsp;<a href=\"results_view_pdf_student_card.php?class={$sel_class['Class_id']}&rgn={$reg_num}\"><img style=\"vertical-align: middle\" src=\"images/png/print_icon&16.png\">Print</a>";
					; 
					if((isset($results_receiver))&(isset($results_message))){
 
 $_SESSION['Rreceivers']=$results_receiver;
 $_SESSION['Rmessages']=$results_message;
 
 }
?>
                </table>

 
<?php 
 //

 echo "<br/>";
  
 echo "</div>";
 echo "<br/>";


 }?>
 </div>
<div>


<form class="contact_form"

 
 <?php
$sms_to_send=count($results_receiver);
 if(is_able_sms($sms_to_send)){
                                     echo " action=\"results_view.php?class={$sel_class['Class_id']}&scc=2\"";
									 
							  }else{
									 echo " action=\"buyCredit.php?fin={$sms_to_send}\"";
									 } ?> method="post" name="contact_form">
    
		<span>There are <b><?php echo $num; ?></b> School reports for <?php echo "Senior <b>{$sel_class['Senior']} , {$sel_class['Class_name']}</b>" ;?>
		</span>
		<?php 
		
		if(count($results_receiver)>0){?>
        	<a href="results_view_pdf_card.php?class=<?php echo $sel_class['Class_id'];?>"><span id="pdf" >Print all</span></a><button class="submit" type="submit">Send All</button>
		<?php }?>
      
</form>
<?php 

} ?>
    </div>	
					
</td>
						</tr>
						<tr>
		<table>				
<tr id="footer2" ><td >&nbsp;&nbsp;<?php if(isset($_SESSION['school_name'])){ echo "<b>".$_SESSION['school_name']."</b>&nbsp;&nbsp;&nbsp;&nbsp;";}?>Copyright 2013,ACADEMIC BRIDGE &nbsp;&nbsp;&nbsp;&nbsp;<b><i>Black&#38;Blue International Limited</i></b>&nbsp;&nbsp;</td></tr>
</table>
					</table>
 </tr>
</td>
</tr>
	
	
</table>

		
	
	</body>
</html>
 <?php include("includes/footer2.php"); ?>