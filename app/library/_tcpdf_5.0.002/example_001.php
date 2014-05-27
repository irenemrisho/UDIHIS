<?php
require_once("includes/session.php");
require_once("includes/connection.php"); 
require_once("includes/functions.php");
require_once('tcpdf/config/lang/eng.php');
require_once('tcpdf/tcpdf.php');

//
$query = "SELECT Reg_number,class.Class_id, CONCAT(first_name,\" , \",last_name) AS names, PPN, CONCAT(\"Senior\",Senior,\",\",Class_name) AS class
FROM student, class  
WHERE student.class_id=class.Class_id AND student.Reg_number='{$_GET['rgn']}' AND student.School_id={$_SESSION['user_id']}";
		$student_info = mysql_query($query);
		confirm_query($student_info);
		$std_info_line=mysql_fetch_array($student_info);
		$stud_names=$std_info_line['names'];
		$stud_class=$std_info_line['class'];
		$stud_regNumber=$std_info_line['Reg_number'];
		$stud_ppn=$std_info_line['PPN'];

//create new pdf  document
$pdf=new TCPDF(PDF_PAGE_ORIENTATION,PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);

//set document information 

$pdf->SetCreator('academic bridge');
$pdf->SetAuthor('school user');
$pdf->SetTitle('bulletin');
$pdf->SetSubject('TCPDF tutorial');
$pdf->SetKeywords('pdf');

//set defaults header data
$pdf->setHeaderData(PDF_HEADER_LOGO,PDF_HEADER_LOGO_WIDTH,PDF_HEADER_TITLE.'001',PDF_HEADER_STRING,array(0,64,255),array(0,64,128));
$pdf->setFooterData($tc=array(0,64,0),$lc=array(0,64,128));

//set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA,'',PDF_FONT_SIZE_DATA));

//set defaults monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT,PDF_MARGIN_TOP,PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(true,PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

//set defaults font subsetting mode

$pdf->SetFont('dejavusans','',14,'',true);

//add a page
$pdf->AddPage();

//set text shadow effect
$pdf->setTextShadow(array('enableed'=>true,'depth_w'=>0.2,'depth_h'=>0.2,'color'=>array(196,196,196),'opacity'=>1,'blend_mode'=>'Normal'));
//set some contents to print
$reg_totals=array();
$num=0;
$results_receiver=array();
$results_message=array();
$RClass=$_GET['class'];

$reg_totals=get_student_average_class($RClass);

$num=mysql_num_rows($reg_totals);

$html=<<<EOD
<link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css" />
  <h3>Student results:</h3>

EOD;
$stud_missing_bulletin=0;
for($i=1; $i<=$num; $i++){
 $reg_total = mysql_fetch_array($reg_totals);
 $reg_num=$reg_total['Reg_number'];
 if($reg_num==$_GET['rgn']){
 $stud_missing_bulletin=1;
 $stud_names=get_student_names_by_reg($reg_num,$_GET['class']);
   $stud_name = mysql_fetch_array($stud_names);

 $html.=<<<EOD
  <div id=\"report-container\">
   <h3>BULLETIN</h3>
EOD;

 if($stud_name['names']!=null){
 $html.=<<<EOD
  <i>Names:</i> <b>{$stud_name['names']}</b>
EOD;
  
 }else{
 
 
 }
 $html.=<<<EOD
  <br/><i>Registration number:</i></b> <b>{$reg_num}</b><br/>
EOD;
 

 $stud_results=array();
 $stud_results=get_student_average_courses($reg_num);
 $course_num=mysql_num_rows($stud_results);
  
  
  $html.=<<<EOD
  <div id= "list_table" cellspacing="0" >
					<?php 
					
					<table  cellspacing='0' cellpadding='0' width=400px;> 
					<tr style="height:35px">
					<th style="width:10%">Course Name</th><th style="width:10%">Marks</th><th style="width:10%">Max</th><th style="width:10%">Percentage</th>";
					</tr>
					
EOD;


					
				for($j=1; $j<= $course_num; $j++){
					$stud_result = mysql_fetch_array($stud_results);
					 
					if(($j %2)==0) {
			$html.=<<<EOD
  <tr class="firstrow">
					<td>{$stud_result['Course_name']}</td>
					<td>{$stud_result['Marks']}</td>
					<td>{$stud_result['max_marks']}</td>
					<td>{$stud_result['score']}</td>
					
					
					</tr>
EOD;
				
					
				
					}
					else{
					$html.=<<<EOD
  <tr class="secondrrow" >
					<td> echo {$stud_result['Course_name']};</td>
					<td>{$stud_result['Marks']}</td>
					<td>{$stud_result['max_marks']}</td>
					<td>{$stud_result['score']}</td>
					
					
					</tr>
EOD;
					
					
					}
					
					}
					
					$html.=<<<EOD
   </table><br/><div id="botton_bulletin">
					<i>Percentage:</i><b>{$reg_total['ResAvg']}</b>,&nbsp;&nbsp;&nbsp;<i>Place:</i><b>{$i}/{$num}</b>
					</div></div>
				<br/>
  
 </div>
 <br/>
EOD;
					

	
					 
					
				
 

 


  }}



//print text using writeHtmlCell()
$pdf->writeHTMLCell($w=0,$h=0,$x='',$y='',$html,$border=0,$ln=1,$fill=0,$reseth=true,$align='',$autopadding=true);

//close and output PDF document
$pdf->Output('example_001','I');

//end of file