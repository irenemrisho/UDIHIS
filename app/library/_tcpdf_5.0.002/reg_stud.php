
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
<i>you are here:</i>&nbsp;<a href="profile.php" ><b>Home</a>&nbsp;&#62;&nbsp;<a href="class.php?class=<?php echo $sel_class['Class_id']; ?>"><?php echo "Senior {$sel_class['Senior']} , {$sel_class['Class_name']}" ; ?> </a>&nbsp;&#62;&nbsp;Registered students</b> 
							 
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
<td  id="working_right_nav" valign=top >

<table cellspacing="0" cellpadding="0" border="0" width=970>
<tr>
<h2><?php echo "Senior {$sel_class['Senior']} , {$sel_class['Class_name']}" ;?></h2>

					
</tr>
						<tr >
				<td>

				<div id="main-container">

<?php
  				
					
					$class_id=mysql_prep($_GET['class']);
					$student_set=get_all_students($class_id);
					$number=mysql_num_rows($student_set);
					
				?>
				
				<?php if($number>0) {?>
					
					<?php if ($number ==1 ){
						echo "<p>There is <b>one</b> registered student.&nbsp;&nbsp;<span class=\"stud_notif\"><a href=\"reg_stud_pdf_no_nber_1.php?class={$sel_class['Class_id']}\"><img style=\"vertical-align: middle\" src=\"images/png/print_icon&16.png\"><b>Print</b></a><span id=\"small\">(without phone numbers)</span></span>&nbsp;&nbsp;<span class=\"stud_notif\"><a href=\"reg_stud_pdf_1.php?class={$sel_class['Class_id']}\"><b><img style=\"vertical-align: middle\" src=\"images/png/print_icon&16.png\">Print</b></a><span id=\"small\">(with phone numbers)</span></span>&nbsp;&nbsp;<span class=\"stud_notif\"><a href=\"send_to_class.php?class={$sel_class['Class_id']}\"><img style=\"vertical-align: middle\" src=\"images/png/mail_2_icon&16.png\"><b>SMS</b></a><span id=\"small\">(to all from this list)</span></span></p>";
					
					}else{   
						echo "<p>There are <b>{$number}</b> registered students &nbsp;&nbsp;<span class=\"stud_notif\"><a href=\"reg_stud_pdf_no_nber_1.php?class={$sel_class['Class_id']}\"><img style=\"vertical-align: middle\" src=\"images/png/print_icon&16.png\"><b>Print</b></a><span id=\"small\">(without phone numbers)</span></span>&nbsp;&nbsp;<span class=\"stud_notif\"><a href=\"reg_stud_pdf_1.php?class={$sel_class['Class_id']}\"><b><img style=\"vertical-align: middle\" src=\"images/png/print_icon&16.png\">Print</b></a><span id=\"small\">(with phone numbers)</span></span>&nbsp;&nbsp;<span class=\"stud_notif\"><a href=\"send_to_class.php?class={$sel_class['Class_id']}\"><img style=\"vertical-align: middle\" src=\"images/png/mail_2_icon&16.png\"><b>SMS</b></a><span id=\"small\">(to all from this list)</span></span></p>";}
						
					?>
				<div id= "list_table" cellspacing="0" >
					<link rel="stylesheet" href="stylesheets/tableS.css" type="text/css" media="screen" />		
				<table  cellspacing='0' cellpadding='0' width=100%> <tr style="height:35px"> <th style="width:20%">Reg.number</th>  <th style="width:20%">First Name</th> <th style="width:20%">Second Name</th> <th style="width:20%">Parent Phone Number</th>    <th style="width:20%">Options</th></tr> 
				<?php 	
					$low=1;
					
					while($student= mysql_fetch_array($student_set)){ 
					
					?>
					
					 
					 <?php 
			if($low%2==0){
			?>	
			<tr class="firstrow">
				<td><?php echo $student['Reg_number'];?></td>
				<td> <?php echo $student['first_name'];?></td>
				<td><?php echo $student['last_name'];?></td>
				<td><?php echo (($student['PPN']!=null)?"0".substr($student['PPN'],-9):"");?></td> 
				<td><a href="edit_student.php?rgn=<?php echo urlencode($student['Reg_number']); ?>&class=<?php echo urlencode($sel_class['Class_id']);?>" title="Edit student's information" >Edit</a>
					&nbsp;&nbsp;&nbsp;&nbsp;<a href="delete_student.php?rgn=<?php echo urlencode($student['Reg_number']); ?>&class=<?php echo urlencode($sel_class['Class_id']); ?>" onclick ="return confirm('Do you want to delete <?php echo "{$student['first_name']} ,{$student['last_name']}"; ?> ?'); " title="Delete the student">Delete</a>
					&nbsp;&nbsp;&nbsp;&nbsp;<a href="send_sms_student.php?rgn=<?php echo urlencode($student['Reg_number']); ?>&class=<?php echo urlencode($sel_class['Class_id']);?>" title="Message to the parent">Send SMS</a>
			<?php echo "&nbsp;&nbsp;<a href='student.php?rgn={$student['Reg_number']}&class={$class_id}' title=\"More about this student\" ><img src=\"images/png/rnd_br_next_icon&16.png\"></img></a>";?>
			</td>
			</tr>
			<?php 
			}else{
			?>
			<tr class="secondrow">
				<td><?php echo $student['Reg_number'];?></td>
				<td> <?php echo $student['first_name'];?></td>
				<td><?php echo $student['last_name'];?></td>
				<td><?php echo (($student['PPN']!=null)?"0".substr($student['PPN'],-9):"");?></td> 
				<td><a href="edit_student.php?rgn=<?php echo urlencode($student['Reg_number']); ?>&class=<?php echo urlencode($sel_class['Class_id']);?>" title="Edit student's information" >Edit</a>
					&nbsp;&nbsp;&nbsp;&nbsp;<a href="delete_student.php?rgn=<?php echo urlencode($student['Reg_number']); ?>&class=<?php echo urlencode($sel_class['Class_id']); ?>" onclick ="return confirm('Do you want to delete <?php echo "{$student['first_name']}, {$student['last_name']}"; ?> ?'); " title="Delete the student" >Delete</a>
					&nbsp;&nbsp;&nbsp;&nbsp;<a href="send_sms_student.php?rgn=<?php echo urlencode($student['Reg_number']); ?>&class=<?php echo urlencode($sel_class['Class_id']);?>" title="Message to the parent" >Send SMS</a>
					<?php echo "&nbsp;&nbsp;<a href='student.php?rgn={$student['Reg_number']}&class={$class_id}' title=\"More about this student\" ><img src=\"images/png/rnd_br_next_icon&16.png\"></img></a>";?>
			
					</td>
			</tr>
			<?php  }?>	

					<?php 
					$low++;
					}?>
					</table>
					</div>
					<br/>
					
					
				<?php }
				else{
			
			echo "There is no student registeted yet!<br/> ";
			echo "There are two way you can use to registre students:";
			echo " <ul>";
			?>
			<li><a href="new_student.php?class=<?php echo urlencode($sel_class['Class_id']); ?>">One by one student registration </a><br/></li>
			<li><a href="stud_upload.php?class=<?php echo urlencode($sel_class['Class_id']); ?>">Multiple students registration by uploading a file</a><br/></li>
			
			<?php
			echo " <ul>";
				  
			
			
			}
				?>
				
					
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
</div>
		
	
	</body>
</html>
 <?php include("includes/footer2.php"); ?>