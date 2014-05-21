
<?php include("includes/header.php");?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
	if(!isset($_SESSION['user_id'])){
	redirect_to("index.php");
	}
?>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />


<table cellspacing="0" id= "structure">
	<tr id="nav" cellspacing="0" cellpadding="0" border="0" height=30px width=100% >
		<td id="nav_left" width=60%>
	<h4><i>Welcome</i> , <?php echo "{$_SESSION['username']}"; ?> </h4>
		
    </td>
		<td id="nav_right" width=40%>
	<a href='change_password.php'><h4>change password &nbsp;&nbsp;&nbsp;</a>
		<a href="logout.php">Logout</h4></a>
		 
 
    </td>	
	</tr>
	
<tr id="nav" cellspacing="0" cellpadding="0" border="0" height=20px width=100% >
<td id="nav_left_down">
<i>you are here: </i>
	</td>
<td>
<a href="profile.php" ><b>Home</b></a>&nbsp;&#62;&nbsp;<b>New user</b> 
</td>
</tr>
		<tr>
		<td id="home_navigation"  valign=top>
		         
		
		<div id="main-container">

	<div id="form-container">
    <h2>New user:</h2>
   <?php 
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
	$admin =trim(mysql_prep($_POST['admin']));
	$hashed_password= md5($password); 
	
?>
<?php
	$query = "INSERT INTO users (
	username,hashed_password,admin) VALUES (
	'{$username}','{$hashed_password}',{$admin})";
	if(mysql_query($query,$connection)){
	echo "User successfuly created!<br/>";
	echo "<a href='profile.php')>Back to profile </a>";
	}else{
	echo "<p>user creation failed</p><br/>";
	//echo "<p>" . mysql_error() ."</p><br/>";
	echo "<a href='new_user.php'>Try again</a>";
	}
?>

    </div>	
		</td>
			</tr>	
</table>
</div>
		
	
	</body>
</html>
 <?php include("includes/footer2.php"); ?>