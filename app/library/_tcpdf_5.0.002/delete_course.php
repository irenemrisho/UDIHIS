<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php include("includes/functions.php")?>
<?php 
	if(!isset($_SESSION['user_id'])){
	redirect_to("index.php");
	}
?>
<?php
if(intval($_GET['class']) == 0){
redirect_to("profile.php");
}
// add to check if the class to delete exist
$course_id = mysql_prep($_GET['course']);
$class_id = mysql_prep($_GET['class']);
$query =" DELETE FROM course WHERE course_id={$course_id} AND class_id={$class_id} ";
$result =mysql_query($query,$connection);
	if(mysql_affected_rows() == 1){
	
	redirect_to("reg_courses.php?class=$class_id&msg=1");
		}
	else{

redirect_to("reg_courses.php?class=$class_id&msg=2");

	}
?>

<?php mysql_close($connection);?>