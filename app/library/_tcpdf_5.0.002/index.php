
<?php include("includes/header.php");?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />

<table cellspacing="0" id= "structure">
	
	<tr valign=top>
		<td id="home_navigation" valign=top width=60%>
		         
		     <h2>Educational utility that helps secondary schools for</h2>
			 <ul>
			 <li><img src="images/png/users_icon&32.png" style="vertical-align: middle" >&nbsp;&nbsp;Students information management</li>
			 <li><img src="images/png/list_num_icon&32.png " style="vertical-align: middle">&nbsp;&nbsp;Making student's bulletin and resullts management</li>
			  <li><img src="images/png/cur_dollar_icon&32.png " style="vertical-align: middle">&nbsp;&nbsp;School fees payment management</li>
			 <li><img src="images/png/mail_2_icon&32.png" style="vertical-align: middle">&nbsp;&nbsp;Connecting school's administrator and parents using SMS</li>
			 </ul>
		</td>
		        
		<td id="class" width=40% >
		
			
		
				<form class="form-3" action="authentication.php" method="post">
    <table>
		<?php if(isset($_GET['error'])){?>
		<tr valign=top>
		<td   >
		<div id="error_login">
        <?php
		if(isset($_SESSION['error'])){
		$errors=array();
		$errors=$_SESSION['error'];
		$errors_num=count($errors);
		
		
		
	for($i=0;$i<$errors_num;$i++){
	echo "<i>".$errors[$i]."</i><br/>";
	}
	echo "</p>";
	
//2. unset all the session variables
$SESSION = array();

//3. Destroy the session cookie
if(isset($_COOKIE[session_name()])){
setcookie(session_name(), '' ,time()-42000, '/');
}
//4. Destroy thr session 
session_destroy();
		}elseif($_GET['error']==1){
		
		echo "<p><i>Username/password combination incorrect . <br/>
		please make sure your caps lock key is off and try again.</i></p>";
		
		}
					
				
					?>
						</div>
						</td>
		</tr>
	<?php } 	?>
		
		</table>
	
	<table>
	
		<tr >
        <td ><label for="username">Username</label></td>&nbsp;&nbsp;&nbsp;&nbsp;
        <td><input type="text" name="username" id="login" maxlength='40' placeholder="Username"  required ></td>
		</tr>
		<tr>
        <td><label for="password">Password</label></td>&nbsp;&nbsp;&nbsp;&nbsp;
        <td><input type="password" name="password" id="password" maxlength='40' placeholder="Password" required > </td>
		</tr>
		<tr>
        <td><label for="remember"><b><a href="contactUs.php?">Don't have account?</a></b></label></td>
		<td><input type="submit" name="submit" value="Sign in"></td>
		</tr>
	</table>
		
</form>

		</td>
		</tr>	
		

</table>
 <?php include("includes/footer.php"); ?>