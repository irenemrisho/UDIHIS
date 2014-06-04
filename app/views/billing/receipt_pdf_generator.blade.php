<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="60%" border="0" align="center" style="border-collapse: collapse ">
  <tr>
    <td width="30%" height="40" colspan="1
    " ><img src="packages/bootstrap/img/login.png" alt="" name="image" width="60" height="60" id="image" /></td>
    <td width="70%" colspan="2
    " > <div align="center"><h4>UNIVERISTY OF DAR ES SALAAM HEALTH CENTER</h4><h5>PATIENT RECEIPT</h5></div></td>
<?php 
$id= $_GET['p_id'];

?>
  
  </tr>
  <tr>
    <td width="30%"  >Name:&nbsp;&nbsp;<</td>
   
    <td width="70%" colspan="2"><u>{{Patient::find($id)->firstname." ".Patient::find($id)->lastname}}</u></td>
  </tr>
  <tr>
    <td width="30%"  >Hospital #:&nbsp;&nbsp;</td>
    <td width="70%" colspan="2"><u>{{Patient::find($id)->filenumber}}</u></td>
   
  </tr>
  <tr>
    <td width="30%"  >Date issued:&nbsp;&nbsp;</td>
    <td width="70%" colspan="2"><u>{{ date('D d M Y',time()) }}</u></td>
   
  </tr>

</table>
<br />
<?php

$patients_payments = Payment::whereRaw('status=? and patient_id = ? ', array('paid',$id))->get();
$total =0;
 ?>
<table width="60%" height="58" border="1" cellpadding="0" cellspacing="0" align="center" >
  
    <tr>
    <td>#</td>
    <td>Service name</td>
    <td>Amount</td>
    </tr>
    <?php $index=1; ?>
@foreach($patients_payments as $payment)
    <tr>
    <?php $amount = Price_company::whereRaw('company_id = ? and service_id = ? ', array(1,$payment->service_id))->first()->price;
    ?>
    <td>{{$index}} </td>
    <td>{{Service::find($payment->service_id)->name}}</td>
    <td>{{$amount}}</td>
    
    </tr>
    
    <?php
    $total+=$amount; 
    $index++; ?>
  
 @endforeach
   <tr>
    <td colspan="2"><div align="right">Total</div></td>
    
    <td>{{$total}}</td>
  </tr>
</table>



</body>
</html>

