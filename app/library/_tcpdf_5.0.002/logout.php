<?php require_once("includes/functions.php"); ?>
<?php 
//four steps to closing a session
//1.find the session
session_start();

//2. unset all the session variables
$SESSION = array();

//3. Destroy the session cookie
if(isset($_COOKIE[session_name()])){
setcookie(session_name(), '' ,time()-42000, '/');
}
//4. Destroy thr session 
session_destroy();
redirect_to("index.php?logout=1");
?>