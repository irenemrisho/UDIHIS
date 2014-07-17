<?php   if (Auth::user()->id != null) {
    
?>
@if(Auth::check())
@if(Auth::user()->level == 0)
<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class=""><a href="admin"><i class="icon-home"></i>Dashboard</a></li>
    <li><a href="{{url("manage_user")}}"><i class="icon-exchange"></i>Manage users</a></li>
    <li><a href="{{url("manage_noticeboard")}}"><i class="icon-exchange"></i>Manage noticeboard</a></li>    
    <li><a href="{{url("admin_settings")}}"><i class="icon-hospital"></i>Setting</a></li>
    <li><a href="profile"><i class="icon-user"></i>My account</a></li>
</ul>
@endif

@if(Auth::user()->level == 1)
<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class=""><a href="{{url("dashboard")}}"><i class="icon-home"></i>Dashboard</a></li>
    <li><a href="{{url("provide_medication")}}"><i class="icon-exchange"></i>Provide medication <span class="label label-warning pull-right" id="">{{Recommended_medicine::groupBy('pv_id')->where('status','=','open')->count()}}
</span></a></li>

    </span></a></li>
    <li><a href="{{url("manage_medicine")}}"><i class="icon-user-md"></i>Manage medicine </a></li>
    <li><a href="{{url("product_request")}}"><i class="icon-asterisk"></i>request product </a></li>
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
    <li><a href="{{url("patients")}}"><i class="icon-user-md"></i>Register Patients</a></li>
    <li><a href="{{url("manage/patients")}}" id="patient"><i class="icon-user-md"></i>Manage Patients</a></li>
    <li><a href="{{url("appointRegister")}}"><i class="icon-exchange"></i>Appointment </a></li>

    <li><a href="{{url("reception/reports")}}"><i class="icon-hospital"></i>Manage Reports</a></li>
    <li><a href="{{url("reception/profile")}}"><i class="icon-user"></i>My account</a></li>
</ul>

@endif


@if(Auth::user()->level == 6)
<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class=""><a href="{{url("nurse")}}"><i class="icon-home"></i>Dashboard</a></li>
    <li><a href="{{url("allocate_ward")}}" id="patient"><i class="icon-user-md"></i>Allocate_Patient</a></li>
    <li><a href="{{url("admitted_patients")}}" id="patient"><i class="icon-user-md"></i>Manage Admitted Patients</a></li>
    <li><a href="{{url("reports")}}"><i class="icon-user"></i>Manage Reports</a></li>
    <li><a href="{{url("myAccount")}}"><i class="icon-user"></i>My account</a></li>
</ul>

@endif


@if(Auth::user()->level == 4)
<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class=""><a href="{{url("doctor")}}"><i class="icon-home"></i>Dashboard       </a></li>
    <li><a href="{{url("appointment")}}"><i class="icon-exchange"></i>Appointment <span class="label label-warning pull-right" id="appoints">{{ (Appointment::whereRaw('doctor_id = ? and accepted = ?', array(Auth::user()->id, "no"))->count() == 0) ? "" : Appointment::whereRaw('doctor_id = ? and accepted = ?', array(Auth::user()->id, "no"))->count() }}</span></a> </a></li>
    <li><a href="{{url("allpatients")}}" id="patient"><i class="icon-user-md"></i>Patients        </a></li>
    <li><a href="{{url("prescription")}}"><i class="icon-stethoscope"></i>Prescription    <span class="label label-warning pull-right"></span></a></li>
    <li><a href="{{url("reports")}}"><i class="icon-hospital"></i>Manage Reports</a></li>
    <li><a href="{{url("doctor/profile")}}"><i class="icon-user"></i>My account</a></li>
</ul>

@endif

@if(Auth::user()->level == 5)
<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class=""><a href="{{url("billing")}}"><i class="icon-home"></i>Dashboard</a></li>
    <li><a href="{{url("Pending_bills")}}"><i class="icon-money"></i>Payment<span class="label label-warning pull-right ">{{ Payment::where('status','=','unpaid')->count() }}</span></a></li>
    <li><a href="{{url("Insurance_management")}}"><i class="icon-user-md"></i>Insurance management</a></li>
    <li><a href="{{url("service_management")}}"><i class="icon-certificate"></i>Manage service</a></li>
    <li><a href="{{url("manage_report")}}"><i class="icon-hospital"></i>Manage Reports</a></li>
    <li><a href="{{url("My_account_billing")}}"><i class="icon-user"></i>My account</a></li>
    
</ul>
@endif

@if(Auth::user()->level == 7)

<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class=""><a href="{{url("hr")}}"><i class="icon-home"></i>Dashboard</a></li>
    <li><a href="{{url("hr/person")}}"><i class="icon-user-md"></i>Register Employee</a></li>
    <li><a href="{{url("hr/manage_user")}}"><i class="icon-exchange"></i>Manage Employees</a></li>
    <li><a href="#"><i class="icon-hospital"></i>Manage Reports</a></li>
    <li><a href="{{url("hr/profile")}}"><i class="icon-user"></i>My account</a></li>
</ul>

@endif

@if(Auth::user()->level == 8)
<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class=""><a href="{{url("supplies")}}"><i class="icon-home"></i>Dashboard</a></li>
    <li><a href="{{url("supplies/request")}}"><i class="icon-asterisk"></i>Pending request<span class="label label-warning pull-right ">{{ Product_request::where('status','=','open')->count() }}</span></a></li>
    <li><a href="{{url("supplies/supplied")}}"><i class="icon-sort"></i>Supplied</a></li>
    <li><a href="{{url("supplies/goods")}}"><i class="icon-user-md"></i>Manage goods</a></li>
    <li><a href="{{url("supplies/reports")}}"><i class="icon-hospital"></i>Manage Reports</a></li>
    <li><a href="{{url("supplies/account")}}"><i class="icon-user"></i>My account</a></li>
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
