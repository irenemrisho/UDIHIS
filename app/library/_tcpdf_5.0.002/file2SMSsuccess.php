
<?php include("includes/header.php");?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
	if(!isset($_SESSION['user_id'])){
	redirect_to("index.php");
	}
?>



<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<table cellspacing="0" id= "structure">
	
	<tr id="nav" cellspacing="0" cellpadding="0" border="0" height=30px width=100% >
		<td id="nav_left" width=60%>
	<h4><i>Welcome</i> , <?php echo "{$_SESSION['username']}"; ?> </h4>
		
    </td>
		<td id="nav_right" width=40%>
					<div id="tw-form-outer">
<form action="search.php?" method="post" id="tw-form">    
	<input type="text" id="tw-input-text" name="search" placeholder="Search for student name ,registration number or phone number  " required onfocus="if(this.value=='search'){this.value='';}" onblur="if(this.value==''){this.value='search';}" /> 
    <input type="submit" id="tw-input-submit" value="" /> 
</form>
</div>
			
		
	<a href='change_password.php'><b>Change password</b></a>
		&nbsp;<b>|</b>&nbsp;<a href="logout.php"><b>Logout</b></a>
	</td>	
	</tr>
<tr id="nav" cellspacing="0" cellpadding="0" border="0" height=20px width=100% >
<td id="nav_left">
<b><i><a href='file2SMS.php?'><img src="images/png/share_2_icon&16.png">&nbsp;File to SMS</a><i></b>&nbsp;&nbsp;&nbsp;&nbsp;
<b><i><a href='set_fees_term.php'><img src="images/png/shopping_bag_dollar_icon&16.png">&nbsp;Set School fees</a><i></b>

	</td>
<td>
<i>you are here:</i>&nbsp;<a href="profile.php" ><b>Home</a>&nbsp;&#62;&nbsp;File to SMS</b> 
							  
		<span style="float:right;"><a href="buyCredit.php">&nbsp;<b>|</b>&nbsp;<b>Buy SMS</b>&nbsp;&nbsp;</a></span>
		
		<div class="balance">
      <div>See Balance</div>
      <span>
        <b><?php getLeftSMS();?></b>
      </span>
      
    </div>
</td>
</tr>
	<tr id="working_nav">
<td id="working_left_nav" valign=top>

	
	
					
					
					

</td>
<td   valign=top >

<table cellspacing="0" cellpadding="0" border="0" width=970>
<tr>


					
</tr>
						<tr >
				<td>

		<?php
		if(isset($_GET['scc'])==1){
		
		?>
		<h3>SMS formed:</h3>		
		<?php 
		$sms_to_send;
  $source_file ="uploads/usr{$_SESSION['user_id']}smstofile";
 csv_file_to_sms($source_file);

  
  ?>
  <form class="contact_form" <?php if(is_able_sms($sms_to_send)){
                                     echo "action=\"file2SMSsuccess.php?ccc=2\"";
									 }else{
									 echo "action=\"buyCredit.php?fin={$sms_to_send}\"";
									 } ?>																	
															 method="post" name="contact_form">
    <ul>
        
        <li>
        	<button class="submit" type="submit">Send all</button>
        </li>
    </ul>
</form>
   <?php }elseif(isset($_GET['ccc'])==2){?>
   

<?php

  ?> 
  	<?php if(count($_SESSION['receivers'])==count($_SESSION['messages'])){
$msg_to=array();
$numbers =array();


$msg_to=$_SESSION['messages'];
$numbers=$_SESSION['receivers'];	
$num=count($numbers);


 
 if($num>0){
   $smsNBER=0;
 echo "<h3>SMS report:</h3>";
 echo "<div id= \"list_table\" cellspacing=\"0\" >";
echo "<link rel=\"stylesheet\" href=\"stylesheets/tableS.css\" type=\"text/css\" media=\"screen\" />";		
echo "<table  cellspacing='0' cellpadding='0' width=100%> <tr style=\"height:35px\">";
echo "<tr style=\"height:35px\">";
					echo "<th style=\"width:10%\">receiver</th><th style=\"width:10%\">Message Status</th>";
					echo "</tr>";
					set_time_limit(0);
for($i=1; $i<=$num; $i++){
$index=$i-1;
 $receiver = $numbers[$index] ;
 $msg=$msg_to[$index];
if(($i%2)==0) {
 echo "<tr class=\"firstrow\">";
 }else{
 echo "<tr class=\"secondrrow\">"; 
 }
 


					
   if(strlen($receiver)==12){
   
	
 $_GET['$phoneNumber']=$receiver;
 $_GET['$message'] =$msg;
$_GET['$source']="acabridge";

	

 echo "<td>{$receiver}</td>";
 
include("submitsms.php");
			$status=array();	
			$status=explode("|",$resp);
			if($status[0]=="1701"){
			 $smsNBER++;
			
			echo "<td class=\"sent\">sent</td>";

			}
			elseif($status[0]!="1701"){
			
			
			echo "<td class=\"failed\">Not sent</td>";
			
			}
 }else{

 echo "<td  >Not found</td><td >Not sent </td>";
 
 }
 echo "</tr>";
	}
	  updateNberSMS($smsNBER);
	echo "</table>";
	}elseif($num<1){
		echo "<div id=\"error_notification\">";
					echo "<i>No receiver found in this class</i>";
echo "</div>";
			
			}
	
	
	}?>
  <?php }else{ ?>
		
		<h3>SMS formation:</h3>		
			
<?php 
	 $source_file ="uploads/usr{$_SESSION['user_id']}smstofile";
	/*$target_table="results";
	
	if the the is table you can save in this data
	csv_file_to_mysql_table($source_file,$target_table, $max_line_length=10000);
	
	*/
	csv_file_reader($source_file);
	
	?>
	
	
	
	
	<?php
	// we need to ask user to form a sample sms based on keyword he/she want to include in sms
	//fill_maximum();
	if(isset($course_name[0])&(isset($row))){
	
	$key_word_num=count($course_name[0]);
	echo "you can use the following keyword in the SMS:";
	echo "<ul>";
	echo "<li><b>addname:</b> to include student's firstname</li>";
	  for ($i=1; $i < $key_word_num; $i++) {
	  echo "<li><b>add{$course_name[0][$i]}</b>: to include <b><i>{$course_name[0][$i]}</i></b> from the uploaded file</li>";
	  
	  }
	echo "</ul>";
	}
	?>
	<div id="form-container">
    <h2>Form a SMS:</h2>
	<p>Before the message sent to <b><?php echo $row-2; ?></b> recievers from your file <br/>
	write down your message then click on <b>VIEW FORMED SMS</b> to see how it looks after adding keywords
	
	</p>
    <form class="contact_form" action="file2SMSsuccess.php?scc=1" method="post" name="contact_form">
    <ul>
        <li>
           <h2>SMS:</h2>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
      
       <li>
            <label for="message">Message:<red>*</red></label>
            <textarea name="message" cols="40" rows="6" required ></textarea>
			
        </li>
        <li>
        	<button class="submit" type="submit">View formed SMS</button>
        </li>
    </ul>
</form>
    </div>	
	
		<?php  } ?>
					
			
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