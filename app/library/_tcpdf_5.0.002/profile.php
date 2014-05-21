
<?php include("includes/header.php");?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
	if(!isset($_SESSION['user_id'])){
	redirect_to("index.php");
	}
?>

<?php
	find_selected();
	$adm=is_admin($_SESSION['user_id']);
	?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />


<table cellspacing="0" id= "structure">
	
	<tr id="nav" cellspacing="0" cellpadding="0" border="0" height=30px width=100% >
		<td id="nav_left" width=60%>
	<h4><i>Welcome</i> , <?php echo "{$_SESSION['username']}"; ?> </h4>
		
    </td>
		<td id="nav_right" width=40%>
							   <?php 
					if($adm['admin']==0){
					?>
					<div id="tw-form-outer">
<form action="search.php?" method="post" id="tw-form">    
	<input type="text" id="tw-input-text" name="search" placeholder="Search for student name ,registration number or phone number  " required onfocus="if(this.value=='search'){this.value='';}" onblur="if(this.value==''){this.value='search';}" /> 
    <input type="submit" id="tw-input-submit" value="" /> 
</form>
</div>
					
					<?php }?>
				
		
		
	<a href='change_password.php'><b>Change password</b></a>
		&nbsp;<b>|</b>&nbsp;<a href="logout.php"><b>Logout</b></a>
	</td>	
	</tr>
<tr id="nav" cellspacing="0" cellpadding="0" border="0" height=20px width=100% >
<td id="nav_left">
<?php if($adm['admin']==0){?>
<b><i><a href='file2SMS.php?'><img src="images/png/share_2_icon&16.png">&nbsp;File to SMS</a><i></b>&nbsp;&nbsp;&nbsp;&nbsp;
<b><i><a href='set_fees_term.php'><img src="images/png/shopping_bag_dollar_icon&16.png">&nbsp;Set School fees</a><i></b>

	<?php }?>
	</td>
<td>
<i>you are here:</i>&nbsp;<a href="profile.php" ><i><b>Home</a><?php if (!is_null($sel_senior)){?>&nbsp;&#62;&nbsp;Senior <?php echo $sel_senior; ?>
	<?php } ?></b>
							   <?php 
					if($adm['admin']==0){
					?>
		<span style="float:right;"><a href="buyCredit.php">&nbsp;<b>|</b>&nbsp;<b>Buy SMS</b>&nbsp;&nbsp;</a></span>
		
		<div class="balance">
      <div>See Balance</div>
      <span>
        <b><?php getLeftSMS();?></b>
      </span>
      
    </div>
	<?php } ?>
</td>
</tr>
	<tr id="working_nav">
<td id="working_left_nav" valign=top>
	
					   <?php 
					if($adm['admin']==0){
					?>
<form class="change_term_form" action="change_term.php?" method="post" name="term_form">
    
        <span class="academic_yr">
		<select  name="academic_yr" required >
		<?php
		
		//find defaults
		$defaults_yr_term=array();
		$defaults_yr_term=mysql_fetch_array(get_default_academic_term($_SESSION['term']));
		$default_Academic_id=$defaults_yr_term['Academic_id'];
		$default_Term_value=$defaults_yr_term['Term_value'];
		$default_Term_sDate=$defaults_yr_term['Start_date'];
		$default_Term_eDate=$defaults_yr_term['End_date'];
		
		//
		$academic_yrs=academic_year();
	echo "<option name=\"academic_yr\" value =\"".$default_Academic_id."\">".substr($default_Term_sDate,0,4)."-".substr($default_Term_eDate,0,4)." </option>";
	
 while($academic_yr= mysql_fetch_array($academic_yrs)){

	echo "<option name=\"academic_yr\" value =\"".$academic_yr['Academic_id']."\">".substr($academic_yr['Start_date'],0,4)."-".substr($academic_yr['End_date'],0,4)." </option>";

	}
		?>
           
		</select>
		</span>
		<span class="term" >
			<select  name="term" required >
		     <option name="term" value="<?php echo $default_Term_value;?>"><?php echo $default_Term_value;?></option>
			 <option name="term" value="1">1</option>
			 <option name="term" value="2">2</option>
			 <option name="term" value="3">3</option>
			</select>
		
		</span>
        	<button  title="Click here to change the term to work with" type="submit">Ok</button>
   
</form>
					<?php
					left_navigation();
					?>
					<br/>
						<div id="">
    
 
    </div>
					
					<?php }?>
					<?php 
					
					if($adm['admin']==1){
					
					
					?>
					<h2>Operator </h2>
					<?php

				operator_menu();
				
					                    }?>
					
	
	
					

</td>
<td   valign=top >

<table cellspacing="0" cellpadding="0" border="0" width=970>
						<tr >
								<td id="working_right_nav" >
				<?php if(!is_null($sel_class)){ ?>
						<h2><?php echo "Senior {$sel_class['senior']} , {$sel_class['class_name']}" ;?></h2>
					<?php } elseif (!is_null($sel_senior)){ ?>
						<h2><?php echo "SENIOR {$sel_senior}" ;?> </h2>
						
							<a href="new_class.php?senior=<?php echo urlencode($_GET['senior']); ?>">+Add new class</a>
						
					<?php } else{ ?>
						
						
						
						
						<?php 
					if($adm['admin']==0){
					
					if(isset($_GET['ct'])){
					if($_GET['ct']==1){
					?>
					
					<div id="success_notification">
<?php
					echo "<p ><i>Sucessefully changed to Academic year: <b>".substr($default_Term_sDate,0,4)."-".substr($default_Term_eDate,0,4)."</b> and Term: <b>$default_Term_value</b> </i></p>";
				
					?>
						</div>
					
					<?php
					
					}elseif($_GET['ct']==2){
					?>
					<div id="error_notification">
<?php
					echo "<p><i>Changing Academic year/term failed.</i></p>";
				
					?>
						</div>
					
					
					<?php
					
					}
					
					}
					?>
					<h2>ACADEMIC BRIDGE: </h2>
						<br/>
					The <b>academic bridge</b> is utility that helps  secondary schools to do the following:<br/>
						<ul>
						<li>Management of students information</li>
						<li>Making student's bulletin and resullts management</li>
						<li>School fees payment management</li>
						<li>Connecting school's administrator and parents using <b><i>SMS</i></b></li>
						</ul>
					<p style=" border-bottom: dashed 1px rgb(207, 207, 207)" ></p>
					<h2>Statistics: </h2>
					<ul>
					<?php
					$school_id=$_SESSION['user_id'];
					$totalstudent_array=array();
					$totalstudent_array=mysql_fetch_array(total_student($school_id));
					
					?>
						<li>Total students:&nbsp;<b><?php echo $totalstudent_array['number']; ?></b> students</li>
						</ul>
											<p style=" border-bottom: dashed 1px rgb(207, 207, 207)" ></p>
					<h2>Available registration numbers: </h2>
					<ul>
					<?php
					$Available_regs=array();
					$Available_regs=top_regnumber($school_id);
					while($Available_reg= mysql_fetch_array($Available_regs)){
					?>
					<li>From:&nbsp;<b><?php echo $Available_reg['Regs']+1; ?></b></li>
					
					<?php } ?>
						
					</ul>
					<?php }elseif($adm['admin']==1){
	echo "<h2>Academic bridge school users:</h2>";
	echo "<div class=\"search-container\">";
echo "<ul>";
$userSet=getUsers();
 while($user= mysql_fetch_array($userSet)){
	//<img width=\"24\" height=\"24\" src=\"images/Reflection/User.png\">
	echo "<li><img src=\"images/png/user_icon&24.png\">&nbsp;<i><a href='school.php?scl={$user['School_id']}'></i> ".$user['Username']."</a><i><br/>From:</i>&nbsp;<a href='school.php?scl={$user['School_id']}'>".$user['School_name']."</a>";
	echo "<div class=\"sms_notification\" >";
			if($user['Account_active']==1){
			echo "active";
			}else{
			echo "desactive";
			}
			
	echo"</div></li>";
	}
		
	
	

echo "</ul>";
echo "</div>";
}?>
					<?php } ?>
</td>
						</tr>
						<tr>
		<table>				
<tr id="footer2" ><td >&nbsp;&nbsp;<?php if(isset($_SESSION['school_name'])){ echo "<b>".$_SESSION['school_name']."</b>&nbsp;&nbsp;&nbsp;&nbsp;";}?>Copyright 2013,ACADEMIC BRIDGE &nbsp;&nbsp;&nbsp;&nbsp;<b><i>Black&#38;Blue International Limited</i></b>&nbsp;&nbsp;</td></tr>
</table>
					</table>
 </tr>
</td>
</tr>
	
	
</table>
</div>
		
	
	</body>
</html>
 <?php include("includes/footer2.php"); ?>