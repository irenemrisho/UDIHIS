
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
	<?php if(isset($_POST['senior'])&&isset($_POST['senior'])){

	$errors = array();
$required_fields = array('class_name','senior');
foreach($required_fields as $fieldname){
	if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
	 $errors[]= $fieldname;
	}}
	$fields_with_lenghts = array('class_name' => 30);
	foreach($fields_with_lenghts as $fieldname => $maxlength){
		if(strlen($_POST[$fieldname]) > $maxlength){
		$errors[]= $fieldname; }
		}
	

	
	if(empty($errors)){
	
	$class_name =trim(mysql_prep($_POST['class_name']));
	$senior =trim(mysql_prep($_POST['senior']));
	
			$query = "INSERT INTO class (class_name,senior,school_id) VALUES ('{$class_name}',{$senior},{$_SESSION['user_id']})";
	if(mysql_query($query)){
	$message="1";
	}else{
	$message="2";
	//$message .= " " . mysql_error() ." ";
	}
	
	}}
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />


<table  cellspacing="0" id= "structure">
	
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
<i>you are here:</i>&nbsp;<a href="profile.php" ><b>Home</a>&nbsp;&#62;&nbsp;New class</b><br/>
							  
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
					if($adm['admin']==0){
					?>
					<?php
					left_navigation();
					?>
					
					<?php }?>
					<?php 
					
					if($adm['admin']==1){
					
					
					?>
					<h3>Administration: </h3>
					<hr/>
					 
					 <a href='new_user.php'>+Add new User</a>
					
					 <?php }?>
					

</td>
<td   valign=top >

<table cellspacing="0" cellpadding="0" border="0" width=970>

						<tr >
				<td>
			<div id="main-container">
<?php if(!empty($message)){?>
<?php if ($message==1){ ?>
<div id="success_notification">
<?php
					echo "<p ><i>The class was successfully created.</i></p>";
				
					?>
						</div>
					<?php } elseif($message==2){?>
					<div id="error_notification">
<?php
					echo "<p><i>Create class  failed.</i></p>";
				
					?>
						</div>
					<?php } ?>
				<?php } ?>	
	<div id="form-container">
    
    <form class="contact_form" action="new_class.php" method="post" name="contact_form">
    <ul>
        <li>
           <h2>New Class:</h2>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
        <li>
            <label for="text">Class Name: <red>*</red></label>
            <input type="text" name="class_name" placeholder="Class Name" required />
        </li>
        <li>
            <label for="number">Senior: <red>*</red></label>
            <input type="number" name="senior" value='<?php echo $sel_senior; ?>'  min='1' max='6'  step='1' required />
            <span class="form_hint">1,2,3,4,5 or 6</span>
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