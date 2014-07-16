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
<?php 

	
	 if(isset($_POST['amount'])){
	
$customer_nber=$_POST['phone'];
$receiver ="250788520919";
$user_name =$_SESSION['username'];
$amount = $_POST['amount'];
$sms_ber=ceil($amount/30);
$school_name=get_school_name();
$msg=" hi,{$user_name} from {$school_name['School_Name']} wants to buy {$sms_ber}sms for {$amount}frw ,contact him/her on this number {$customer_nber} ";

if($receiver!=null){

$_GET['$phoneNumber']=$receiver;
$_GET['$source']="acabridge";

$_GET['$message'] =$msg ;		 
include("submitsms.php");
$message ="1";
     }else{
	 $message ="2";
	 }
if(isset($resp)){
			$status=array();	
			$status=explode("|",$resp);
			if($status[0]=="1701"){
			 $message ="3";

			}
			elseif($status[0]!="1701"){
			
			 $message ="2";
			
			}

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
<i>you are here: </i><a href="profile.php" ><b>Home</b></a>&nbsp;&#62;&nbsp;<b>Buy SMS</b>
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
	
					

</td>
<td   valign=top >

<table cellspacing="0" cellpadding="0" border="0" width=970>

						<tr >
				<td>
			<div id="main-container">
<?php if(!isset($message)){ ?>
<?php if(isset($_GET['fin'])){ ?>
				<div id="error_notification">
<?php
					echo "<p><i>You have insuffient credit to send <b>{$_GET['fin']}</b> messages <br/>
					your have <b>".getLeftSMS_nber()."</b> SMS</i></p>";
				
					?>
						</div>
	<?php } ?>
						
	<div id="form-container">
    
   <form class="contact_form" action="buyCredit.php?" method="post" name="contact_form">
    <ul>
        <li>
           <h2>Buy SMS:</h2>
		   <p>
		    <img src="images/png/checkmark_icon&16.png" style="vertical-align: middle">&nbsp;Enter <b>the mobile phone number</b> that you are using <b>now</b> so that we will be able to contact you soon.<br/>
		    <img src="images/png/checkmark_icon&16.png" style="vertical-align: middle">&nbsp;Fill out the field below with the amount of money.<br/>
		    <img src="images/png/checkmark_icon&16.png" style="vertical-align: middle">&nbsp;Click on <b>buy</b> to buy your SMS <br/>
			<img src="images/png/checkmark_icon&16.png" style="vertical-align: middle">&nbsp;You will be shown the number of SMS equivalent to the amount.<br/><br/>
		   <b>PRICE: 30frw/sms</b>
		   </p>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
        <li>
            <label for="text">Mobile phone number: <red>*</red></label>
		<input type="text" id="text" name="phone" maxlength='10' pattern="\d+.{9}" placeholder="your number here"
"Please enter a ten digit phone number" required />
		<span class="form_hint">e.g: 0722334455</span>
       </li>
		<li>
            <label for="amount">Amount<red>*</red></label>
            <input type="number" name="amount" placeholder="amount here" min='1'   step='1' required />
			 <span class="form_hint">50000</span>
        </li>
        
        <li>
        	<button class="submit" type="submit">Buy</button>
        </li>
    </ul>
</form>
    </div>	
	<?php }else{ 
	if($message==3){
	?>
	
	<div id="success_notification">
<?php
					echo "<p><i>You have requested <b>{$sms_ber}</b> SMS for <b>{$amount}</b> frw ,the SMS will be added soon on your account  </i></p>";
				
					?>
						</div>
	
	<?php } else{?>
	
	<div id="error_notification">
<?php

					echo "<p><i>The request failed </i></p>";
				
					?>
						</div>
	
	<?php }} ?>			
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