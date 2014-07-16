<?php require_once("includes/session.php"); ?>

<?php require_once("includes/connection.php"); ?>

<?php require_once("includes/functions.php"); ?>

<?php //require_once("includes/form_functions.php");
 //echo 'here'; exit; 

// Check data from the form
$error=array();
$index=0;

//username
if(empty($_POST['username'])){
$error[$index]=" please enter your username ";
$index++;
}elseif(ctype_alnum(trim($_POST['username']))){
$username =trim(mysql_prep($_POST['username']));
}else{
$error[$index]=" Username must consist of letters and numbers only ";
$index++;
}

if(empty($_POST['password'])){
$error[$index]="please enter your password";
$index++;
}else{
$password =trim(mysql_prep($_POST['password']));
$hashed_password= md5($password);
}


	if($error==null){
	
	// check database to see if username and the hashed password exist there.
	$query = "SELECT user_id, username,hashed_password, Admin";
	$query .= " FROM users ";
	$query .=" WHERE username = '{$username}'";
	$query .=" AND hashed_password ='{$hashed_password}' ";
	$query .=" LIMIT 1"; 
		
	$result_set = mysql_query($query);
	confirm_query($result_set);
		if(mysql_affected_rows() > 0){
		//username/password authenticated
				// and only 1 macth
			$found_user = mysql_fetch_array($result_set);
			$_SESSION['user_id']=$found_user['user_id'];
			$_SESSION['username']=$found_user['username'];
			$_SESSION['password']=$found_user['hashed_password'];
			$_SESSION['Admin']=$found_user['Admin'];
			
			//check if  user is school the find the defoults term 
			if($_SESSION['Admin']==0){
			$default_id_array=get_school_default_term_id($_SESSION['user_id']);
			$default_id=mysql_fetch_array($default_id_array);
			$_SESSION['term']=$default_id['defautTerm'];
			$_SESSION['school_name']=$default_id['School_Name'];
			
			}
				if(isset($_SESSION['user_id'])){
				
				header("location:profile.php?");
				}elseif(!isset($_SESSION['user_id'])){
				$message=0;
				header("location:index.php?error=$message");
				}
				
				}
				
			else{	//username/password combination was not found in the database
		
		$message ="1";
		header("location:index.php?error=$message");
		}
					
}elseif(count($error)>0){
$message=count($error);
$_SESSION['error']=$error;
header("location:index.php?error=$message");


}else{

header("location:index.php?error=3");
}
	

?>
<?php include("includes/close.php"); ?>
