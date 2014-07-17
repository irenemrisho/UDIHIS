<?php include("includes/header.php");?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
	if(!isset($_SESSION['user_id'])){
	redirect_to("index.php");
	}
	$adm=is_admin($_SESSION['user_id']);
	 if($adm['admin']!=1){
	 redirect_to("profile.php");
	 
	}
?>
<?php 
if(isset($_POST['term'])&isset($_POST['academic_yr'])){

	?>
<?php 

	$term =trim(mysql_prep($_POST['term']));
	$academic_yr =trim(mysql_prep($_POST['academic_yr']));
	
?>
<?php
	$query = "INSERT INTO academicterm (
	Term_value,Academic_year_id) VALUES (
	'{$term}',{$academic_yr})";
	if(mysql_query($query,$connection)){
	
	
	$message="1";

 
	}else{
	$message= "2";
	
	}

	}
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />


<table  cellspacing="0" id= "structure">
	
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
<i>you are here: </i><a href="profile.php" ><b>Home</b></a>&nbsp;&#62;&nbsp;<b>New Term</b>
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
	
<h2>Operator </h2>
					<?php

				operator_menu();
				
					?>
										

</td>
<td   valign=top >

<table cellspacing="0" cellpadding="0" border="0" width=970>

						<tr >
				<td>
			<div id="main-container">
<?php if(!empty($message)){

?>

<?php if ($message==3|$message==1){ ?>
<div id="success_notification">
<?php
					echo "<p ><i>Term created,click <a href=\"view_term.php\" ><b>here</b></a>&nbsp;to view.</i></p>";
				
					?>
						</div>
						
					<?php } elseif($message==4|$message==2){?>
					<div id="error_notification">
<?php
					echo "<p><i>Term creation failed.</i></p>";
				
					?>
						</div>
					
					<?php } ?>
				<?php } ?>
	<div id="form-container">
    
   <form class="contact_form" action="new_term.php?" method="post" name="contact_form">
    <ul>
        <li>
		
           <h2>New Term:</h2>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
       <li>
		 <label for="academic_yr">Academic year:<red>*</red></label>
		<select name="academic_yr" required >
		
		     <option name="academic_yr" value="">Please select</option>
         <?php
		
		$termSets=academic_year();
 while($termSet= mysql_fetch_array($termSets)){
?>
 <option name="academic_yr" value ="<?php echo  $termSet['Academic_id'];?>"><?php echo substr($termSet['Start_date'],0,4)."-".substr($termSet['End_date'],0,4); ?></option>
 <?php }
		
		?>

	 
        </select>
		
		</li>
		<li>
		 <label for="term">Term:<red>*</red></label>
		<select name="term" required >
		
		     <option name="term" value="">Please select</option>
         
 <option name="term" value ="1">1</option>
 <option name="term" value ="2">2</option>
 <option name="term" value ="3">3</option>
	 
        </select>
		
		</li>
        <li>
        	<button class="submit" type="submit">Create</button>
        </li>
    </ul>
</form>
    </div>	
					
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