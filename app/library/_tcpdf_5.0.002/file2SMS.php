
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

	<?php
	file_to_SMS_menu();
					
					
		?>			

</td>
<td   valign=top >

<table cellspacing="0" cellpadding="0" border="0" width=970>
<tr>
<h2>File to SMS</h2>

					
</tr>
						<tr >
				<td>

				<div id="main-container">
<h3>Remark:</h3>
			<?php if(isset($_GET['msg'])){
			
			echo $_GET['msg'];
			
			}?>
			Before you upload make sure:
			<ul>
			<li>File must be a CSV file</li>
			<li>First line contents colomns' names</li>
			<li>First colomns his/her registration number</li></ul>
			<p>Looks like this:</p>
						<div id= "list_table" cellspacing="0" >
					<link rel="stylesheet" href="stylesheets/tableS.css" type="text/css" media="screen" />	
			<table  cellspacing='0' cellpadding='0' width=100%> <tr style="height:35px"> <th style="width:20%">Reg.number</th>  <th style="width:30%">info1</th> <th style="width:30%">info2</th> <th style="width:30%">info3</th> </tr> 
			</table>
			</div>
			
			<?php
			
		

			?><br/>
		
			<h3>Upload</h3>
		<div id="form-container">	
<form class="contact_form" enctype="multipart/form-data" action="file2SMSprocess.php?" method="post">
	<ul>
	 <li>
            <label for="file">choose  file to upload! </label>
		<input type="file" id="text" name="uploadfile"  required />
		<span class="form_hint">e.g: example.csv</span>
       </li>
        <li>
        	<button class="submit" type="submit">upload file</button>
        </li>
    </ul>
	
</form>	
		</div>	
			
<br />
					<p><?php  echo "<a href=\"profile.php?\">"; ?>Cancel</a></p>
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