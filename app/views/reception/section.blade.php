@if($section == "OPD")

<p>Doctor</p>
<select id="opd" class="form-control" name="doctor_id">  
<?php 
$docts = User::where('level',4)->get();
?>
@foreach($docts as $dr)
<option name="sectioninfo" value="{{$dr->id}}">{{$dr->first_name}} {{$dr->last_name}}</option>
@endforeach
</select>

@endif

@if($section == "Insurance")
<?php 
$insurances = InsuranceCompany::get()->except(3);
          
?>

<p>Insurance Company</p>
<select id="insurence" class="form-control" name="company">  
<option  value=""></option>
@foreach($insurances as $insurance)
<option  value="{{$insurance->id}}">{{$insurance->name}}</option>
@endforeach
</select>

@endif

@if($section == "Cash")
<?php 
$private_id=InsuranceCompany::whereName('private')->first()->id;

$registration_id= Service::whereName('registration')->first()->id;
$consultation_id= Service::whereName('consultation')->first()->id;

$registration_price = Price_company::whereRaw('service_id=? and company_id = ? ', array($registration_id,$private_id))->first()->price;
$consultation_price = Price_company::whereRaw('service_id=? and company_id = ? ', array($consultation_id,$private_id))->first()->price;
 

?>

<p>Payement</p>
<div class="pull-left" >
<table class="table  table-bordered" style="boarder:" >
    <thead>
            <tr>

                <th>#</th>
                <th>Service</th>
                <th>Amount</th>
                <th>Payment</th>
       
            </tr>
    </thead>
    <tbody id="provide_medication">
            
         <tr>
         	<td>1</td>
            <td>Registration</td>
            <td>{{$registration_price}}</td>
            <td style="text-align:center;">
		    	<label name="first" id="first1"   class="btn-small btn-primary">Pay now</label>
            	<label name="" id="second1" class="btn-small btn-warning">Later</label>
         		<input type="hidden" name="payReg" id="payReg" value="" />
			</td>
            </tr>
         <tr>
         	<td>2</td>
            <td>Consultation</td>
            <td>{{$consultation_price}}</td>
            <td style="text-align:center;">
		    	<label name="" id="first2"  class="btn-small btn-primary">Pay now</label>
            	<label name="" id="second2" class="btn-small btn-warning">Later</label>
            	<input type="hidden" name="payCons" id="payCons" value="" />
			</td>

            </tr>
            
        </tbody>
    </table>
    
</div>

@endif

@if($section == "IPD")
<p>Doctor</p>
<select id="ipd" class="form-control" name="doctor_id">  
<?php $docts = User::where('level',4)->get(); ?>

<option></option>


@foreach($docts as $dr)
<option name="sectioninfo" value="{{$dr->id}}">{{$dr->first_name}} {{$dr->last_name}}</option>
@endforeach
</select>
<input type="hidden" value={{url('getDrRooms')}} id="url" />
<div id="ipdinfo"></div>

<script type="text/javascript">

$(document).ready(function(){
$('#ipd').on('change', function(){
var  dr  = $(this).val();
var  url = $('#url').val();
$.post(url,{dr:dr}, function(data){
$('#ipdinfo').html(data);
});
});



});	
</script>

@endif


@if($section == "ANC")
<p>Doctor</p>
<select id="ipd" class="form-control" name="sectioninfo">  
<?php $docts = User::where('level',4)->get(); ?>
@foreach($docts as $dr)
<option name="sectioninfo" value="{{$dr->id}}">{{$dr->first_name}} {{$dr->last_name}}</option>
@endforeach


@endif


<script type="text/javascript">
$(document).ready(function(){
/*for registrattion*/
$('#first1').on('click', function(){
$('#payReg').val(1);
$(this).text('Paid').css('opacity', '0.7');
$('#second1').fadeOut(900);
});
$('#second1').on('click', function(){
$('#payReg').val(0);
$(this).text('Will be Paid').css('opacity', '0.7');
$('#first1').fadeOut(900);
});
/* for  consultation*/
$('#first2').on('click', function(){
$('#payCons').val(1);
$(this).text('Paid').css('opacity', '0.7');
$('#second2').fadeOut(900);
});	

$('#second2').on('click', function(){
$('#payCons').val(0);
$(this).text('Will be Paid').css('opacity', '0.7');
$('#first2').fadeOut(900);
});		
});
</script>
