
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
	you are here:</i>&nbsp;<a href="profile.php" ><b>Home</b></a><?php if (!is_null($sel_class)){?>&nbsp;&#62;&nbsp;<b><?php echo "Senior ". $sel_class['Senior']." ," .$sel_class['Class_name']; }?></b> 
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
	
					   <?php if(!is_null($sel_class)){ ?>
						
						
		<?php			
					right_navigation();
		?>
					<?php }?>
	
					

</td>
<td  id="working_right_nav" valign=top >

<table cellspacing="0" cellpadding="0" border="0" width=970>
						<tr >
				<?php if(!is_null($sel_class)){ ?>
						<h2><?php echo "Senior {$sel_class['Senior']} , {$sel_class['Class_name']}" ;?></h2>
						
						
		
					<?php } elseif (!is_null($sel_senior)){ ?>
						<h2><?php echo "SENIOR {$sel_senior}" ;?> </h2>
						
						
							<a href='new_class.php'>+Add new class</a>
						
					<?php } else{ ?>
						<h2>ACADEMIC BRIDGE: </h2>
						<br/>
						
						
						The <b>academic bridge</b> is web based application that provides the following services:<br/>
						<ul>
						<li>Management of students information</li>
						<li>Making student's bulletin and resullts management</li>
						<li>School fees payment management</li>
						<li>Connecting school's administrator and parents using <b><i>SMS</i></b></li>
					
						</ul>
						
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