<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php find_selected(); ?>
<?php 
 if(!is_dir("uploads")){
  mkdir("uploads");
 
 }
 //type application/vnd.ms-excel
 
 $name=$_FILES['uploadfile']['name'];
 $size=$_FILES['uploadfile']['size'];
 //$type=$_FILES['uploadfile']['type'];
 $extension= strtolower(substr($name,strpos($name,'.')+1));
 
if(isset($name)){
/*
if want to check for file type we can use
if(!empty($name)&&($extension=='csv')&&($type='application/vnd.ms-excel'))
*/
		if(!empty($name)&&($extension=='csv')){
			$putItAt ="uploads/usr{$_SESSION['user_id']}smstofile";
     
				
				
 
			if(move_uploaded_file($_FILES['uploadfile']['temp_name'],$putItAt)){
	 
			redirect_to("location: file2SMSsuccess.php?"); 
			}else{
					if(copy($_FILES['uploadfile']['tmp_name'],$putItAt)){
					header("location: file2SMSsuccess.php?");
					}else{
					$message ="uploaded failed";
					redirect_to("location: file2SMS.php?msg=$message"); 
					}
	 }	
		}
		else{
		$message="remember ,we only allow csv file to be uploaded";
	 redirect_to("location: file2SMS.php?msg=$message"); 
		}
 }else{
 
 $message="select a csv file into your computer,then click to upload";
	 redirect_to("location: file2SMS.php?msg={$message}"); 
 }
 ?>