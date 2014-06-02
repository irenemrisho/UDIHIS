<?php   if (Auth::user()) {
    
?>
@if(Auth::check())
@if(Auth::user()->level == 0)
<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class=""><a href="admin"><i class="icon-home"></i>Dashboard</a></li>
    <li><a href="manage_user"><i class="icon-exchange"></i>Manage users</a></li>
    <li><a href="#"><i class="icon-hospital"></i>Setting</a></li>
    <li><a href="#"><i class="icon-user"></i>My account</a></li>
</ul>
@endif

@if(Auth::user()->level == 1)
<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class=""><a href="{{url("dashboard")}}"><i class="icon-home"></i>Dashboard</a></li>
    <li><a href="{{url("provide_medication")}}"><i class="icon-exchange"></i>Provide medication<span class="label label-warning pull-right ">{{ Recommended_medicine::where('status','=','open')->count() }}</span></a></li>

    </span></a></li>
    <li><a href="{{url("manage_medicine")}}"><i class="icon-user-md"></i>Manage medicine </a></li>
    <li><a href="{{url("#")}}"><i class="icon-hospital"></i>Manage Reports</a></li>
    <li><a href="my_accountpharmacy"><i class="icon-user"></i>My account</a></li>
</ul>
@endif

@if(Auth::user()->level == 2)

<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class=""><a href="{{url("laboratory")}}"><i class="icon-home"></i>Dashboard</a></li>

    <li><a href="{{url("testpatients")}}" id="patient"><i class="icon-user-md"></i>Test Patients<span class="label label-warning pull-right" id="labtest">{{ Laboratory::whereRaw('tested = FALSE')->count() }}</span></a></li>

    <li><a href="{{url("stock")}}"><i class="icon-exchange"></i>Manage Stock <span class="label label-warning pull-right"></span></a></li>
    <li><a href="{{url("reports")}}"><i class="icon-hospital"></i>Manage Reports</a></li>
</ul>
@endif

@if(Auth::user()->level == 3)
<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class=""><a href="{{url("reception")}}"><i class="icon-home"></i>Dashboard</a></li>
    <li><a href="{{url("patients")}}" id="patient"><i class="icon-user-md"></i>Register Patients</a></li>
    <li><a href="{{url("manage/patients")}}" id="patient"><i class="icon-user-md"></i>Manage Patients</a></li>
    <li><a href="{{url("appointRegister")}}"><i class="icon-exchange"></i>Appointment </a></li>

    <li><a href="{{url("reception/reports")}}"><i class="icon-hospital"></i>Manage Reports</a></li>
    <li><a href="{{url("profile")}}"><i class="icon-user"></i>My account</a></li>
</ul>

@endif

@if(Auth::user()->level == 4)
<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class=""><a href="{{url("doctor")}}"><i class="icon-home"></i>Dashboard       </a></li>
    <li><a href="{{url("appointment")}}"><i class="icon-exchange"></i>Appointment </a></li>
    <li><a href="{{url("allpatients")}}" id="patient"><i class="icon-user-md"></i>Patients        </a></li>
    <li><a href="{{url("prescription")}}"><i class="icon-stethoscope"></i>Prescription    <span class="label label-warning pull-right"></span></a></li>
    <li><a href="{{url("reports")}}"><i class="icon-hospital"></i>Manage Reports</a></li>
    <li><a href="{{url("profile")}}"><i class="icon-user"></i>My account</a></li>
</ul>
@endif

@if(Auth::user()->level == 5)
<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class=""><a href="{{url("billing")}}"><i class="icon-home"></i>Dashboard</a></li>
    <li><a href="{{url("Pending_bills")}}"><i class="icon-money"></i>Payment</a></li>
    <li><a href="{{url("Insurance_management")}}"><i class="icon-user-md"></i>Insurance management</a></li>
    <li><a href="{{url("service_management")}}"><i class="icon-certificate"></i>Manage service</a></li>
    <li><a href="{{url("manage_report")}}"><i class="icon-hospital"></i>Manage Reports</a></li>
    <li><a href="{{url("My_account_billing")}}"><i class="icon-user"></i>My account</a></li>
    
</ul>
@endif

@if(Auth::user()->level == 6)
<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class=""><a href="{{url("index")}}"><i class="icon-home"></i>Dashboard</a></li>
    <li><a href="admission/allocate_ward" id="patient"><i class="icon-user-md"></i>Allocate Ward</a></li>
    <li><a href="" id="patient"><i class="icon-user-md"></i>Manage Wards</a></li>
    <li><a href="admission/dosage"><i class="icon-exchange"></i>Dosage</a></li>

    <li><a href=""><i class="icon-hospital"></i>Manage Reports</a></li>
    <li><a href=""><i class="icon-user"></i>My account</a></li>
</ul>

@endif

@if(Auth::user()->level == 7)
<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class=""><a href="{{url("hr")}}"><i class="icon-home"></i>Dashboard</a></li>
    <li><a href="{{url("hr/person")}}"><i class="icon-user-md"></i>Manage People</a></li>
    <li><a href="{{url("hr/position")}}"><i class="icon-user-md"></i>Add Position</a></li>
    <li><a href="#"><i class="icon-hospital"></i>Manage Reports</a></li>
    <li><a href="#"><i class="icon-user"></i>My account</a></li>
</ul>

@endif

@if(Auth::user()->level == 8)
<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class=""><a href="#"><i class="icon-home"></i>Dashboard</a></li>
    <li><a href="#"><i class="icon-user-md"></i>Manage Patients</a></li>
    <li><a href="#"><i class="icon-user-md"></i>Add</a></li>
    <li><a href="#"><i class="icon-hospital"></i>Manage Reports</a></li>
    <li><a href="#"><i class="icon-user"></i>My account</a></li>
</ul>

@endif

@endif

<hr />
<br />
<?php }
else {
    return Redirect::to('login.login_page');
}?>
</div> <!-- /span3 -->
