<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php include("includes/functions.php")?>
<?php 
	if(!isset($_SESSION['user_id'])){
	redirect_to("index.php");
	}
?>
<?php
$academic_yr=mysql_prep($_POST['academic_yr']);
$term=mysql_prep($_POST['term']);


$term_id=get_term_id($academic_yr,$term);

if(!empty($term_id)){
$_SESSION['term']=$term_id;

header("location:profile.php?ct=1");
}else{
header("location:profile.php?ct=2");
}
?>

<?php mysql_close($connection);?>