
<?php include("includes/header.php");?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
	if(!isset($_SESSION['user_id'])){
	redirect_to("index.php");
	}
?>

<?php find_selected(); 
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="styles/tableS.css" type="text/css" media="screen" />
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
<i>you are here:</i>&nbsp;<a href="profile.php" ><b>Home</a>&nbsp;&#62;&nbsp;<a href="class.php?class=<?php echo $sel_class['Class_id']; ?>"><?php echo "Senior {$sel_class['Senior']} , {$sel_class['Class_name']}" ; ?> </a>&nbsp;&#62;&nbsp;View registered courses</b> 
							 
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

<table id=" working_right_nav" cellspacing="0" cellpadding="0" border="0" width=970>
<tr>
<h2><?php echo "Senior {$sel_class['Senior']} , {$sel_class['Class_name']}" ;?></h2>

					
</tr>
						<tr >
				<td>

				<div id="main-container">

							<?php
  				
					//showing all course givin class id
					$class_id=mysql_prep($_GET['class']);
					$course_set=get_all_courses($class_id);
					$number=mysql_num_rows($course_set);
					
				?>
				
				<?php if($number>0) {?>
					
					<?php if ($number ==1 ){
						echo "<p>There is <b>one</b> registered course.</p> ";
					
					}else{
						echo "<p>There are <b>{$number}</b> registered courses </p>";}
					?>
					<div id= "list_table" cellspacing="0" >
					<link rel="stylesheet" href="stylesheets/tableS.css" type="text/css" media="screen" />
					<?php 
					
					echo "<table  cellspacing='0' cellpadding='0' width=100%> ";
					echo "<tr style=\"height:35px\">";
					echo "<th style=\"width:10%\">Course name</th><th style=\"width:10%\">Maximum Marks</th><th style=\"width:10%\">Options</th>";
					echo "</tr>";
					$id=0;
					while($course= mysql_fetch_array($course_set)){ ?>
					<?php if(($id%2)==0) {?>
					<tr class="firstrow"><td><?php echo $course['Course_name'];?></td>
					<td> <?php echo $course['max_marks'];?></td>
					<td><a href="edit_course.php?course=<?php echo urlencode($course['Course_id']); ?>&class=<?php echo urlencode($sel_class['Class_id']);?>">Edit</a>
					&nbsp;&nbsp;&nbsp;&nbsp;<a href="delete_course.php?course=<?php echo urlencode($course['Course_id']); ?>&class=<?php echo urlencode($sel_class['Class_id']); ?>" onclick ="return confirm('Do you want to delete this course?'); ">Delete</a></td></tr>
					<?php }
					else{
					?>
					
					<tr class="secondrrow" ><td><?php echo $course['Course_name'];?></td>
					<td><?php echo $course['max_marks'];?></td>
					<td><a href="edit_course.php?course=<?php echo urlencode($course['Course_id']); ?>&class=<?php echo urlencode($sel_class['Class_id']);?>">Edit</a>
					&nbsp;&nbsp;&nbsp;&nbsp;<a href="delete_course.php?course=<?php echo urlencode($course['Course_id']); ?>&class=<?php echo urlencode($sel_class['Class_id']); ?>" onclick ="return confirm('Do you want to delete this course?'); ">Delete</a></td></tr>
					
					<?php }
					$id++;
					}?>
					</table>
					</div>
				<?php }
				else{
				
				echo "There is no course registered yet! ";
				}
				?>
			<br />
					
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