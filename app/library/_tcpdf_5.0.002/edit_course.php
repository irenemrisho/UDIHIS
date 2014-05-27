

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
<?php 
//check for this
	if(intval($_GET['class']) == 0){
	redirect_to("profile.php");
	}
	if(isset($_POST['max_marks'])&&isset($_POST['course_name'])){
	$errors = array();
$required_fields = array('course_name','max_marks');
foreach($required_fields as $fieldname){
	if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
	 $errors[]= $fieldname;
	}}
	$fields_with_lenghts = array('course_name' => 30,'max_marks' => 3);
	foreach($fields_with_lenghts as $fieldname => $maxlength){
		if(strlen($_POST[$fieldname]) > $maxlength){
		$errors[]= $fieldname; }
		}
	if(empty($errors)){
	
	
	$class_id = mysql_prep($_GET['class']);
	$course_id = mysql_prep($_GET['course']);
	$course_name = trim(mysql_prep($_POST['course_name']));
	$max_marks = trim(mysql_prep($_POST['max_marks']));
	
	 $query = " UPDATE course SET
				course_name = '{$course_name}',
				max_marks={$max_marks},
				class_id = {$class_id}
				WHERE course_id = {$course_id}";
		$result = mysql_query($query, $connection);
		if (mysql_affected_rows() == 1){
		$message ="1";
		}
		else{
		$message="2";
		//$message .="<br />" .mysql_error();
		}
	}else{
	//errors occured
	//$message ="There were " . count($errors) . " errors in form.";
	}
	}
	?>
<?php
find_selected();
	
	?>
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
<i>you are here:&nbsp;</i><a href="profile.php" ><b>Home</a> &nbsp;&#62;&nbsp;<a href="class.php?class=<?php echo $sel_class['Class_id']; ?>"><?php echo "Senior {$sel_class['Senior']} , {$sel_class['Class_name']}" ; ?> </a>&nbsp;&#62;&nbsp;Edit course </b> 
								   
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
<h2><?php echo "Senior {$sel_class['Senior']} , {$sel_class['Class_name']}" ;?></h2>

					
</tr>
						<tr >
				<td>

				

<div id="main-container">
<?php if(!empty($message)){?>
<?php if ($message==1){ ?>
<div id="success_notification">
<?php
					echo "<p ><i>The course was successfully updated.</i></p>";
				
					?>
						</div>
					<?php } elseif($message==2){?>
					<div id="error_notification">
<?php
					echo "<p><i>The course update failed.</i></p>";
				
					?>
						</div>
					<?php } ?>
				<?php } ?>	
	<div id="form-container">
    
    <form class="contact_form" action="edit_course.php?course=<?php echo urlencode($_GET['course']); ?>&class=<?php echo urlencode($_GET['class']);?>" method="post" name="contact_form">
    <ul>
        <li>
           <h2>Edit Course:</h2>
		   <?php $edit_course=course_by_id($_GET['course']);?>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
        <li>
            <label for="text">Course Name: <red>*</red></label>
            <input type="text" name="course_name" value="<?php echo trim($edit_course['Course_name']);?>" required />
        </li>
        <li>
            <label for="number">Max. Marks: <red>*</red></label>
            <input type="number" name="max_marks" value="<?php echo trim($edit_course['max_marks']);?>" min='1' max='999'  step='1' required />
            <span class="form_hint">maximum marks 1-999</span>
        </li>
        <li>
        	<button class="submit" type="submit">Update</button>
        </li>
    </ul>
</form>
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