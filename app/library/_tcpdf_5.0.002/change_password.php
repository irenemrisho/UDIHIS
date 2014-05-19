<?php include("includes/header.php");?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
	if(!isset($_SESSION['user_id'])){
	redirect_to("index.php");
	}
?>
<?php
	find_selected();
	$adm=is_admin($_SESSION['user_id']);
	?>
<?php 

	if(isset($_POST['o_password'])&isset($_POST['n_password'])&isset($_POST['an_password'])){
	$errors = array();
$required_fields = array('o_password','n_password','an_password');
foreach($required_fields as $fieldname){
	if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
	 $errors[]= $fieldname;
	}}
	$fields_with_lenghts = array('o_password' => 30,'n_password' => 30,'an_password' => 30);
	foreach($fields_with_lenghts as $fieldname => $maxlength){
		if(strlen($_POST[$fieldname]) > $maxlength){
		$errors[]= $fieldname; }
		}
	
	
	
	$id =($_SESSION['user_id']);
	
	$password =trim(mysql_prep($_POST['n_password']));
	$new_hashed_password= md5($password); 
	$old_password=md5(trim($_POST['o_password']));
	// check if two 2 new password are matching 
	if(md5($_POST['n_password'])!= md5($_POST['an_password'])){
	$message="3";
	}
	//check if the old password is correct
	$old_pswd=get_password($_SESSION['user_id']);
	if($old_password!=$old_pswd['hashed_password']){
	if(!empty($message)){
	$message ="4";
	}else{
	$message ="5";
	}
	
	}
	if(empty($errors)& empty($message)){
	
	 $query = " UPDATE users SET hashed_password = '{$new_hashed_password}' WHERE user_id ='{$id}'";
		$result = mysql_query($query, $connection);
		if (mysql_affected_rows() == 1){
		$message ="1";
		$_SESSION['password']=$password;
		}
		else{
		$message="2";
		//$message .="<br />" .mysql_error();
		}
	}else{
	//errors occured
	if(empty($message)){
	//$message ="There were " . count($errors) . " errors in form.";
	}
	
	}
	}
	?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />


<table  cellspacing="0" id= "structure">
	
	<tr id="nav" cellspacing="0" cellpadding="0" border="0" height=30px width=100% >
		<td id="nav_left" width=60%>
	<h4><i>Welcome</i> , <?php echo "{$_SESSION['username']}"; ?> </h4>
		
    </td>
		<td id="nav_right" width=40%>
							   <?php 
					if($adm['admin']==0){
					?>
					<div id="tw-form-outer">
<form action="search.php?" method="post" id="tw-form">    
	<input type="text" id="tw-input-text" name="search" placeholder="Search for student name ,registration number or phone number  " required onfocus="if(this.value=='search'){this.value='';}" onblur="if(this.value==''){this.value='search';}" /> 
    <input type="submit" id="tw-input-submit" value="" /> 
</form>
</div>
					
					<?php }?>
				
		
		
	<a href='change_password.php'><b>Change password</b></a>
		&nbsp;<b>|</b>&nbsp;<a href="logout.php"><b>Logout</b></a>
	</td>	
	</tr>
<tr id="nav" cellspacing="0" cellpadding="0" border="0" height=20px width=100% >
<td id="nav_left">
<?php if($adm['admin']==0){?>
<b><i><a href='file2SMS.php?'><img src="images/png/share_2_icon&16.png">&nbsp;File to SMS</a><i></b>&nbsp;&nbsp;&nbsp;&nbsp;
<b><i><a href='set_fees_term.php'><img src="images/png/shopping_bag_dollar_icon&16.png">&nbsp;Set School fees</a><i></b>

	<?php }?>
	</td>
<td>
<i>you are here: </i><a href="profile.php" ><b>Home</b></a>&nbsp;&#62;&nbsp;<b>Change Password</b>
							   <?php 
					if($adm['admin']==0){
					?>
		<span style="float:right;"><a href="buyCredit.php">&nbsp;<b>|</b>&nbsp;<b>Buy SMS</b>&nbsp;&nbsp;</a></span>
		
		<div class="balance">
      <div>See Balance</div>
      <span>
        <b><?php getLeftSMS();?></b>
      </span>
      
    </div>
	<?php } ?>
</td>

</tr>
	<tr id="working_nav">
<td id="working_left_nav" valign=top>
	
					

</td>
<td   valign=top >

<table cellspacing="0" cellpadding="0" border="0" width=970>

						<tr >
				<td>
			<div id="main-container">
<?php if(!empty($message)){?>
<?php if ($message==1){ ?>
<div id="success_notification">
<?php
					echo "<p ><i>Password successfully changed,click <a href=\"profile.php\" ><b>here</b></a>&nbsp;to back home.</i></p>";
				
					?>
						</div>
						
					<?php } elseif($message==2){?>
					<div id="error_notification">
<?php
					echo "<p><i>Changing password failed.</i></p>";
				
					?>
						</div>
					
					<?php } elseif($message==3){?>
					<div id="error_notification">
<?php
					echo "<p><i>New password not matched.</i></p>";
				
					?>
						</div>
					<?php } elseif($message==4){?>
					<div id="error_notification">
<?php
					echo "<p><i>New password not matched and wrong old password</i></p>";
				
					?>
						</div>
					<?php } elseif($message==5){?>
					<div id="error_notification">
<?php
					echo "<p><i>Wrong old password.</i></p>";
				
					?>
						</div>
					<?php } ?>
				<?php } ?>
	<div id="form-container">
    
   <form class="contact_form" action="change_password.php?" method="post" name="contact_form">
    <ul>
        <li>
           <h2>Change Password:</h2>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
        <li>
            <label for="password">Old Password:: <red>*</red></label>
            <input type="password" name="o_password" placeholder="your Password here" required />
        </li>
		<li>
            <label for="password">New Password: <red>*</red></label>
            <input type="password" name="n_password" placeholder="New Password here" required />
        </li>
		<li>
            <label for="password">Re-type new Password: <red>*</red></label>
            <input type="password" name="an_password" placeholder="New Password here" required />
        </li>
        
        <li>
        	<button class="submit" type="submit">Change</button>
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