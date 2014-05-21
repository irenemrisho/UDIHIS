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
$id = mysql_prep($_GET['class']);
$reg = mysql_prep($_GET['rgn']);
$query ="DELETE FROM student WHERE class_id={$id} AND School_id={$_SESSION['user_id']} AND Reg_number={$reg} ";

$result =mysql_query($query,$connection);
	if(mysql_affected_rows() == 1){
	redirect_to("reg_stud.php?class=$id");  
		}
	else{
echo "<p>Student deletion failed.</p>";
//echo "<p>"	.mysql_error() . "</p>";
echo "<a href=\"reg_stud.php?class=$id\">Back </a>"; 
	}
?>

<?php mysql_close($connection);?>