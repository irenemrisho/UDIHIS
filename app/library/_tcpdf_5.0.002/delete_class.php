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

$query ="DELETE FROM student WHERE class_id={$id} AND  School_id={$_SESSION['user_id']} ";
$result =mysql_query($query,$connection);
$query ="DELETE FROM class WHERE class_id={$id} AND  School_id={$_SESSION['user_id']} LIMIT 1";
$result =mysql_query($query,$connection);
	if(mysql_affected_rows() == 1){
	redirect_to("profile.php");
		}
	else{
echo "<p>Class deletion failed.</p>";
//echo "<p>"	.mysql_error() . "</p>";
echo "<a href=\"profile.php\">Back to profile</a>"; 
	}
?>

<?php mysql_close($connection);?>