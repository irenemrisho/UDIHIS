<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php find_selected(); ?>
<?php 
 if(!is_dir("uploads")){
  mkdir("uploads");
 
 }
 //type application/vnd.ms-excel
 
 $results_id=$_POST['results'];
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
			$putItAt ="uploads/usr{$_SESSION['user_id']}s{$sel_class['Senior']}c{$sel_class['Class_name']}i{$sel_class['Class_id']}";
     
				
				
 
			if(move_uploaded_file($_FILES['uploadfile']['temp_name'],$putItAt)){
	 if($results_id==3){
			header("location: success2.php?class={$_GET['class']}&rst={$results_id}"); 
			}else{
			header("location: success.php?class={$_GET['class']}&rst={$results_id}"); 
			
			}
			}else{
					if(copy($_FILES['uploadfile']['tmp_name'],$putItAt)){
					 if($results_id==3){
			header("location: success2.php?class={$_GET['class']}&rst={$results_id}"); 
			}else{
			header("location: success.php?class={$_GET['class']}&rst={$results_id}"); 
			
			}
					}else{
					$message ="uploaded failed";
					redirect_to("location: upload.php?class={$_GET['class']}&msg=$message"); 
					}
	 }	
		}
		else{
		$message="Ony CSV file can be uploaded";
	 redirect_to("location: upload.php?class={$_GET['class']}&msg=$message"); 
		}
 }else{
 
 $message="select a csv file into your computer,then click to upload";
	 redirect_to("location: upload.php?class={$_GET['class']}&msg={$message}"); 
 }
 ?>