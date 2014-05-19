
<?php include("includes/header.php");?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="styles/public.css" type="text/css" media="screen" />






<table id= "structure" >
	
	<tr>
		<td id="home_navigation">
		         
		
		<form class="contact_form" action="#" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Contact Us</h2>
             <span class="required_notification">* Denotes Required Field</span>
        </li>
        <li>
            <label for="name">Name *:</label>
            <input type="text"  placeholder="Your name" required />
        </li>
        <li>
            <label for="email">Email *:</label>
            <input type="email" name="email" placeholder="xyz@example.com" required />
            <span class="form_hint">Proper format "name@something.com"</span>
        </li>
		
		<li>
            <label for="text">Phone  *:</label>
		<input type="text" id="text" name="tel" maxlength='10' pattern="\d+.{9}" placeholder=
"Please enter a ten digit phone number" required />
		<span class="form_hint">e.g: 0722334455</span>
       </li>
        <li>
            <label for="message">Message  *:</label>
            <textarea name="message" cols="40" rows="6" required ></textarea>
			
        </li>
        <li>
        	<button class="submit" type="submit">Submit</button>
        </li>
    </ul>
</form>
  	
		</td>
	</tr>				
</table>
 <?php include("includes/footer.php"); ?>