<style type="text/css">
<!--
    table.page_header {width: 100%; border: none; background-color: grey; border-bottom: solid 1mm #AAAADD; padding: 2mm }
-->
</style>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
	if(!isset($_SESSION['user_id'])){
	redirect_to("index.php");
	}
	$School_array=array();
	$School_array=mysql_fetch_array(get_head_master($_SESSION['user_id']));
?>
<?php find_selected(); 
//get term 
$defaults_yr_term=array();
		$defaults_yr_term=mysql_fetch_array(get_default_academic_term($_SESSION['term']));
		$default_Academic_id=$defaults_yr_term['Academic_id'];
		$default_Term_value=$defaults_yr_term['Term_value'];
		$default_Term_sDate=$defaults_yr_term['Start_date'];
		$default_Term_eDate=$defaults_yr_term['End_date'];

//

$class_id=$sel_class['Class_id'];
$student_set=get_all_students($class_id);
$number=mysql_num_rows($student_set);

?>
<style type="text/css">
<!--
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }
}
-->
</style>
<page backcolor="#FEFEFE" backimg="./res/bas_page.png" backimgx="center" backimgy="bottom" backimgw="100%" backtop="0" backbottom="30mm" footer="date;heure;page" style="font-size: 12pt" backtop="10mm">
    <page_header style="font-size: 8pt" >
        <table class="page_footer">
            <tr>
                <td style="width: 60%; text-align: left;">
                    List generated by academicbridge software powered by Black and Blue International Limited
                </td>
               
            </tr>
        </table>
    </page_header>
	<bookmark title="Lettre" level="0" ></bookmark>
	<?php
   set_time_limit(0);
	
	?>
     
     <table cellspacing="0" style="padding: 1px; width: 98%; border: solid 2px #000000; font-size: 11pt; ">
                    <tr>
                        <th style="width: 100%; text-align: center; border: solid 1px #000000;" colspan="6">
                            Student list
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 100%; text-align: left; border: solid 1px #000000;" colspan="6">
                      <table cellspacing="0" style="width: 100%; text-align: left; font-size: 10pt">
                    <tr>

                        <td style="width: 100%">
                            Class:&nbsp;<?php echo "Senior {$sel_class['Senior']} , {$sel_class['Class_name']}" ; ?><br>
                            Academic year:&nbsp;<?php echo substr($default_Term_sDate,0,4)."-".substr($default_Term_eDate,0,4);?><br>
                            Term:&nbsp;<?php echo $default_Term_value;?><br>
                        </td>
                    </tr>
                </table>
					
                        </th>
                    </tr>
                    <tr>
                        <th style="width: 10%; border: solid 1px #000000;">Reg Number</th>
                        <th style="width: 25%; border: solid 1px #000000;">First Name</th>
                        <th style="width: 20%; border: solid 1px #000000;">Second Name</th>
						<th style="width: 15%; border: solid 1px #000000;"></th>
                        <th style="width: 15%; border: solid 1px #000000;"></th>
						<th style="width: 15%; border: solid 1px #000000;"></th>
                    </tr>
					<?php
$j=0;	
					while($student= mysql_fetch_array($student_set)){ 
					
?>
                    <tr> 
						<td style="width: 10%; border: solid 1px #000000;"><?php echo $student['Reg_number'];?></td>
                        <td style="width: 25%; border: solid 1px #000000;text-align: left;"><?php echo $student['first_name'];?></td>
                        <td style="width: 20%; border: solid 1px #000000;text-align: left;"><?php echo $student['last_name'];?></td>
                        <td style="width: 15%; border: solid 1px #000000;text-align: left;"></td>
						<td style="width: 15%; border: solid 1px #000000;text-align: left;"></td>
						<td style="width: 15%; border: solid 1px #000000;text-align: left;"></td>
					</tr>

               <?php 
			   			}

			   ?>
					
                   
</table>
<br>
	 
</page>