<?php   if (Auth::user()) {
    
?>
@if(Auth::user()->level == 0)
<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class="active"><a href="admin"><i class="icon-home"></i>Dashboard</a></li>
    <li><a href="manage_user"><i class="icon-exchange"></i>Manage users</a></li>
    <li><a href="#"><i class="icon-hospital"></i>Setting</a></li>
    <li><a href="#"><i class="icon-user"></i>My account</a></li>
</ul>
@endif

@if(Auth::user()->level == 1)
<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class="active"><a href=""><i class="icon-home"></i>Dashboard</a></li>
    <li><a href="#"><i class="icon-exchange"></i>Provide medication</a></li>
    <li><a href="patients"><i class="icon-user-md"></i>Manage medicine </a></li>
    <li><a href="#"><i class="icon-stethoscope"></i>Medicine category<span class="label label-warning pull-right"></span></a></li>
    <li><a href="reports.html"><i class="icon-hospital"></i>Manage Reports</a></li>
    <li><a href="#"><i class="icon-user"></i>My account</a></li>
</ul>
@endif

@if(Auth::user()->level == 2)

<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class="active"><a href="index"><i class="icon-home"></i>Dashboard</a></li>
    <li><a href="appointment"><i class="icon-exchange"></i>Appointment </a></li>
    <li><a href="patients" id="patient"><i class="icon-user-md"></i>Patients</a></li>
    <li><a href="prescription"><i class="icon-stethoscope"></i>Prescription    <span class="label label-warning pull-right"></span></a></li>
    <li><a href="reports"><i class="icon-hospital"></i>Manage Reports</a></li>
    <li><a href="profile"><i class="icon-user"></i>My account</a></li>
</ul>
@endif

@if(Auth::user()->level == 3)
<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class="active"><a href="index"><i class="icon-home"></i>Dashboard</a></li>
    <li><a href="appointment"><i class="icon-exchange"></i>Appointment </a></li>
    <li><a href="patients" id="patient"><i class="icon-user-md"></i>Manage Patients</a></li>
    <li><a href="reports"><i class="icon-hospital"></i>Manage Reports</a></li>
    <li><a href="profile"><i class="icon-user"></i>My account</a></li>
</ul>

@endif

@if(Auth::user()->level == 4)
<ul id="main-nav" class="nav nav-tabs nav-stacked">
    <li class="active"><a href="doctor"><i class="icon-home"></i>Dashboard       </a></li>
    <li><a href="appointment"><i class="icon-exchange"></i>Appointment </a></li>
    <li><a href="patients" id="patient"><i class="icon-user-md"></i>Patients        </a></li>
    <li><a href="prescription"><i class="icon-stethoscope"></i>Prescription    <span class="label label-warning pull-right"></span></a></li>
    <li><a href="reports"><i class="icon-hospital"></i>Manage Reports</a></li>
    <li><a href="profile"><i class="icon-user"></i>My account</a></li>
</ul>
@endif

@if(Auth::user()->level == 5)

@endif

<hr />
<br />
<?php }else ?>
</div> <!-- /span3 -->