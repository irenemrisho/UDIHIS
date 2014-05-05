@extends('dashboard')
@section('main')
<h1 class="page-title">
    <i class="icon-th-large"></i>
    Manage Patients New Visit
</h1>
<div class="row">
<div class="span9">
<div class="widget-content">
 <form id="myWizard" type="get" action="">

        <section style="display:none" class="step" data-step-title="Initial Information">
            <fieldset >
                 <h4 >Full name :  {{Patient::fullname( $patient)}} </h4>
                <div class="span4 pull-left">
                    <div class="control-group">
                        <label class="control-label" for="">Height</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge " id="" value="" name="height"  />

                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->
                    <div class="control-group">
                        <label class="control-label" for="">Weight</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge " id="" value="" name="weight"  />

                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->

                    <div class="control-group">
                        <label class="control-label" for="password">Allergy</label>
                        <div class="controls">
                            <select class="form-control" name="allergy">
                                <option disabled>Select Allergy</option>
                                <option>Skin</option>
                                <option>Asthma</option>
                                <option>None</option>
                            </select>
                        </div>

                    </div> <!-- /control-group -->



                </div>
                       <h4> Hospital File no: <b>{{$patient->filenumber}}</b></h4>
                <div class="span4 pull-right">
                     
                    <div class="control-group">
                        <label class="control-label" for="temperature">Temperature</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge " id="" value="" name="temperature" />

                        </div> <!-- /controls -->
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="bp">Blood Pressure</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge " id="" value="" name="bloodpressure" >

                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->

                    <div class="control-group">
                        <label class="control-label" for="gender">Blood Group</label>
                        <div class="controls">
                            <select class="form-control" name="bloodgroup">
                                <option>{{$pVisit->bloodgroup}}</option>
                                <option>A</option>
                                <option>B</option>
                                <option>O</option>
                                <option>AB</option>
                            </select>
                        </div>

                    </div> <!-- /control-group -->
                    <div class="control-group">
                        <label class="control-label" for="gender">Rhesus Factor</label>
                        <div class="control-group ">
                            <label class="radio">
                                <input type="radio" name="rhesus" id="" value="positive" >
                                Positive
                            </label>
                            <label class="radio">
                                <input type="radio" name="rhesus" id="" value="negative">
                                Negative</label>

                        </div>

                    </div> <!-- /control-group -->
                </div>


            </fieldset>
        </section>



        <section style="display:none" class="step" id="last" data-step-title="More Information">




            <fieldset >
                <div class="span4 pull-left">
                    
                    <h4 >Full name :  {{Patient::fullname( $patient)}} </h4>
                    <div class="control-group ">
                        <h4>Payment Type</h4>
                        <label class="radio">
                            <input type="radio" name="paymenttype" id="" value="Cash" checked>
                            Cash
                        </label>
                        <label class="radio">
                            <input type="radio" name="paymenttype" id="" value="NHIF">
                            NHIF</label>

                    </div>




                </div>
                <div class="span4 pull-right" style="margin-left:4px;">
                     <h4> Hospital File no: <b>{{$patient->filenumber}}</b></h4>
                    <label class="control-label">Direct To &raquo</label>
                    <p>SECTION</p>
                    <select id="section" name="section" class="form-control">
                        <option></option>
                        <option>OPD</option>
                        <option>IPD</option>
                        <option>ANC</option>
                    </select>

                    <div id="section-more">

                    </div>

                </div>

            </fieldset>
        </section>
    </form>
    </div>
</div>
</div>
@stop