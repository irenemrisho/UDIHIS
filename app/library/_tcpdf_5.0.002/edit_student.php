

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
<?php if(isset($_POST['firstname'])&&isset($_POST['lastname'])){

	$errors = array();
$required_fields = array('firstname','lastname');
foreach($required_fields as $fieldname){
	if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
	 $errors[]= $fieldname;
	}}
	$fields_with_lenghts = array('firstname' => 30,'lastname'=>30 ,'reg_num' =>50);
	foreach($fields_with_lenghts as $fieldname => $maxlength){
		if(strlen($_POST[$fieldname]) > $maxlength){
		$errors[]= $fieldname; }
		}
	//check if max marks is  interger 

	
	if(empty($errors)){

	$first_name =trim(mysql_prep($_POST['firstname']));
	$last_name =trim(mysql_prep($_POST['lastname']));
	$reg_num =trim(mysql_prep($_POST['reg_num']));
	$mobile_num =trim(mysql_prep($_POST['phone']));

	$class_id =trim(mysql_prep($_GET['class']));
	
	//
	
	 $query = " UPDATE student SET
				Reg_number = '{$reg_num}',
				School_id={$_SESSION['user_id']},
				Class_id = {$class_id},
				first_name='{$first_name}',
				last_name='{$last_name}',
				PPN='{$mobile_num}'
				WHERE Reg_number = {$_GET['rgn']} AND School_id={$_SESSION['user_id']} ";
		$result = mysql_query($query, $connection);
		if (mysql_affected_rows() == 1){
		$message ="1";
		}
		else{
		$message="2";
		//$message .="<br />" .mysql_error();
		}
	
	//
	if(mysql_query($query)){
	$message="1";
	}else{
	$message="2";
	//$message .= " " . mysql_error() ." ";
	}
	}
}
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
<i>you are here:&nbsp;</i><a href="profile.php" ><b>Home</a> &nbsp;&#62;&nbsp;<a href="class.php?class=<?php echo $sel_class['Class_id']; ?>"><?php echo "Senior {$sel_class['Senior']} , {$sel_class['Class_name']}" ; ?> </a>&nbsp;&#62;&nbsp;Edit student </b> 
								   
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
//View registered students
					echo "<p ><i>Student was successfully updated,click <a href=\"reg_stud.php?class={$_GET['class']}\" ><b>here</b></a>&nbsp;to view registered students.</i></</i></p>";
				
					?>
						</div>
					<?php } elseif($message==2){?>
					<div id="error_notification">
<?php
					echo "<p><i>Student update failed.</i></p>";
				
					?>
						</div>
					<?php } ?>
				<?php } ?>	
	<div id="form-container">
    
    <form class="contact_form" action="edit_student.php?rgn=<?php echo urlencode($_GET['rgn']); ?>&class=<?php echo urlencode($_GET['class']);?>" method="post" name="contact_form">
    <ul>
        <li>
           <h2>Edit Student:</h2>
		   <?php $edit_stud=student_by_reg($_GET['rgn']);?>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
        
        <li>
            <label for="text">First name: <red>*</red></label>
            <input type="text" name="firstname" value="<?php echo $edit_stud['first_name']; ?>" required />
        </li>
		<li>
            <label for="text">Last name: <red>*</red></label>
            <input type="text" name="lastname" value="<?php echo $edit_stud['last_name']; ?>" required />
        </li>
		<li>
            <label for="text">Reg. number: <red>*</red></label>
            <input type="text" name="reg_num" value="<?php echo $edit_stud['Reg_number']; ?>" required />
        </li>
       <li>
            <label for="text">Mobile phone number: <red>*</red></label>
		<input type="text" id="text" name="phone" maxlength='10' pattern="\d+.{9}" value="<?php echo $edit_stud['PPN']; ?>" required />
		<span class="form_hint">e.g: 0722334455</span>
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