<?php include("includes/header.php");?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
	if(!isset($_SESSION['user_id'])){
	redirect_to("index.php");
	}
	$adm=is_admin($_SESSION['user_id']);
	 if($adm['admin']!=1){
	 redirect_to("profile.php");
	 
	}
?>
<?php 
if(isset($_POST['username'])&isset($_POST['password'])){
$errors = array();
$required_fields = array('username','password');
foreach($required_fields as $fieldname){
	if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
	 $errors[]= $fieldname;
	}}
	$fields_with_lenghts = array('username' => 30);
	foreach($fields_with_lenghts as $fieldname => $maxlength){
		if(strlen($_POST[$fieldname]) > $maxlength){
		$errors[]= $fieldname; }
		}
	
	if(!empty($errors)){
	redirect_to("new_user.php");
	}
	?>
<?php 

	$username =trim(mysql_prep($_POST['username']));
	$password =trim(mysql_prep($_POST['password']));
	$admin =0;
	$hashed_passwordS= md5($password); 
	
?>
<?php
	$query = "INSERT INTO users (
	Username,hashed_password,admin) VALUES (
	'{$username}','{$hashed_passwordS}',{$admin})";
	if(mysql_query($query,$connection)){
	
	
	$message="1";

 
	}else{
	$message= "2";
	
	}
	if($message==1){
	$query = "SELECT user_id, username ";
	$query .= " FROM users ";
	$query .=" WHERE username = '{$username}'";
	$query .=" AND hashed_password ='{$hashed_passwordS}' ";
	$query .=" LIMIT 1"; 
	$result_set = mysql_query($query);
	confirm_query($result_set);
	$result=mysql_fetch_array($result_set);
	
	$school_id=$result['user_id'];
	 
	// we also create a school 
	$Headmasterf=trim(mysql_prep($_POST['headmasterf']));
	$Headmasterl=trim(mysql_prep($_POST['headmasterl']));
	$schName=trim(mysql_prep($_POST['schName']));
	$phone =trim(mysql_prep($_POST['phone']));
	$Email =trim(mysql_prep($_POST['email']));
	$District =trim(mysql_prep($_POST['district']));
 //
	$south_dis=array("Gisagara","Huye","Kamonyi","Muhanga","Nyamagabe","Nyanza","Nyaruguru","Ruhango");
	$kgl_dis=array("Gasabo","Nyarugenge","Kicukiro");
	$north_dis=array("Burera","Gakenke","Gicumbi","Musanze","Rurindo");
	$east_dis=array("Bugesera","Gatsibo","Kayonza","Kirehe","Ngoma","Nyagatare","Rwagamana");
	$west_dis=array("Karongi","Ngorero","Nyabihu","Nyamasheke","Rubavu","Rusizi","Rutsiro");
	if (in_array($District,$south_dis)) {
    $Province="Southern";
     }elseif(in_array($District,$kgl_dis)){
	 $Province="Kigali";
	 }elseif(in_array($District,$east_dis)){
	 $Province="Eastern";
	 }elseif(in_array($District,$west_dis)){
	 $Province="Western";
	 }else{
	 $Province="NOT FOUND";
	 }
	
 $query = "INSERT INTO school (
	School_id,School_Name,School_Province,School_District,School_Email,School_mobile_number,HeadMaster_FirstName,HeadMaster_LastName) VALUES (
	'{$school_id}','{$schName}','{$Province}','{$District}','{$Email}','{$phone}','{$Headmasterf}','{$Headmasterl}')";
	
	if(mysql_query($query,$connection)){
	$message= "3";
	}else{
	$message= "4";
	$query =" DELETE FROM users WHERE username = '{$username} AND hashed_password ='{$hashed_passwordS}' ";
$result =mysql_query($query,$connection);
	
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
<i>you are here: </i><a href="profile.php" ><b>Home</b></a>&nbsp;&#62;&nbsp;<b>New User</b>
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
	
<h2>Operator </h2>
					<?php

				operator_menu();
				
					?>
										

</td>
<td   valign=top >

<table cellspacing="0" cellpadding="0" border="0" width=970>

						<tr >
				<td>
			<div id="main-container">
<?php if(!empty($message)){

?>

<?php if ($message==3|$message==1){ ?>
<div id="success_notification">
<?php
					echo "<p ><i>User successfuly created,click <a href=\"profile.php\" ><b>here</b></a>&nbsp;to back home.</i></p>";
				
					?>
						</div>
						
					<?php } elseif($message==4|$message==2){?>
					<div id="error_notification">
<?php
					echo "<p><i>user creation failed.</i></p>";
				
					?>
						</div>
					
					<?php } ?>
				<?php } ?>
	<div id="form-container">
    
   <form class="contact_form" action="new_user.php?" method="post" name="contact_form">
    <ul>
        <li>
           <h2>New School:</h2>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
        <li>
            <label for="username">Username: <red>*</red></label>
            <input type="text" name="username" placeholder="username" required />
        </li>
		<li>
            <label for="password">Password: <red>*</red></label>
            <input type="password" name="password" placeholder="password" required />
        </li>
		
		<li>
            <label for="schName">School Name: <red>*</red></label>
            <input type="text" name="schName" placeholder="school name" required />
        </li>
		<li>
            <label for="headmasterf">Headmaster&nbsp;<i>FirstName</i>: </label>
            <input type="text" name="headmasterf" placeholder="first name"  />
        </li>
		<li>
            <label for="headmasterl">Headmaster&nbsp;<i>LastName</i>: </label>
            <input type="text" name="headmasterl" placeholder="last name"  />
        </li>
		<li>
            <label for="text">Mobile phone number:</label>
		<input type="text" id="text" name="phone" maxlength='10' pattern="\d+.{9}" placeholder=
"Please enter a ten digit phone number"  />
		<span class="form_hint">e.g: 0722334455</span>
       </li>
	   <li>
            <label for="email">Email *:</label>
            <input type="email" name="email" placeholder="schoolemail@example.com"  />
            <span class="form_hint">Proper format "name@something.com"</span>
        </li>
		<li>
		<label for="district">District *:</label>
		<select name="district" required >
		     <option name="district" value="">Please select</option>
             
             
			 
<option name="district" value ="Bugesera">Bugesera</option>
 <option name="district" value ="Burera">Burera</option>
 <option name="district" value ="Gakenke">Gakenke</option>
 <option name="district" value ="Gasabo">Gasabo</option>
 <option name="district" value ="Gatsibo">Gatsibo</option>
<option name="district" value ="Gicumbi">Gicumbi </option>
<option name="district" value ="Gisagara">Gisagara</option>
<option name="district" value ="Huye ">Huye</option>
<option name="district" value ="Kamonyi">Kamonyi</option>
<option name="district" value ="Karongi">Karongi</option>
<option name="district" value ="Kayonza">Kayonza</option>
<option name="district" value ="Kicukiro">Kicukiro</option>
<option name="district" value ="Kirehe ">Kirehe  </option>
<option name="district" value ="Muhanga">Muhanga</option>
<option name="district" value ="Musanze">Musanze</option>
<option name="district" value ="Ngoma">Ngoma</option>
<option name="district" value ="Ngorero">Ngorero</option>
<option name="district" value ="Nyabihu">Nyabihu</option>
<option name="district" value ="Nyagatare">Nyagatare</option>
<option name="district" value ="Nyamagabe">Nyamagabe</option>
<option name="district" value ="Nyamasheke">Nyamasheke</option>
<option name="district" value ="Nyanza">Nyanza</option>
<option name="district" value ="Nyarugenge">Nyarugenge</option>
<option name="district" value ="Nyaruguru">Nyaruguru</option>
<option name="district" value ="Rubavu">Rubavu</option>
<option name="district" value ="Ruhango">Ruhango</option>
<option name="district" value ="Rurindo">Rurindo</option>
<option name="district" value ="Rusizi">Rusizi</option>
<option name="district" value ="Rutsiro">Rutsiro</option>
 <option name="district" value ="Rwagamana">Rwagamana</option>

			 
        </select>
		
		</li>
		
        
        <li>
        	<button class="submit" type="submit">Create</button>
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