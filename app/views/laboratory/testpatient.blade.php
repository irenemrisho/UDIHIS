@extends('dashboard')
@section('main')
<div class="widget-header">
                        <i class="icon-th-list"></i>
                        <h3>LABORATORY REQUEST/REPORT FORM</h3>
</div> <!-- /widget-header -->
<div id="" class="widget-content">
    <div class="row">
            <form class="">

                            <div class="span2 control-group">
                                <h5>1.HAEMATOLOGY</h5>
                                
                                {{Laboratory::listTests($lab_id, "HAEMATOLOGY")}}
                                
                                <h5>2.SEROLOGY</h5>
                                {{Laboratory::listTests($lab_id, "SEROLOGY")}}
                            </div>

                            <div class="span2 control-group">
                            	<h5>3.URINALYSIS</h5>
                                {{Laboratory::listTests($lab_id, "URINALYSIS")}}
                                
                                <h5>4.OTHERS</h5>
                                {{Laboratory::listTests($lab_id, "OTHERS")}}
                            </div>

                            <div class="span2 control-group">
                            <h5>5.BIOCHEMISTRY</h5>
                                {{Laboratory::listTests($lab_id, "BIOCHEMISTRY")}}
                                
                                <h5>6.ELECTROLYTE</h5>
                                {{Laboratory::listTests($lab_id, "ELECTROLYTE")}}
                            </div>
                            </div>

                            <div class="span2 control-group">
                            <h5>7.STOOL</h5>
                                {{Laboratory::listTests($lab_id, "STOOL")}}
                                
                                <h5>8.BODY FLUIDS(S'fy)</h5>
                                {{Laboratory::listTests($lab_id, "BODY FLUIDS")}}

                                <h5>9.HORMONES</h5>
                                {{Laboratory::listTests($lab_id, "HORMONES")}}
                            </div>
                            <div class="form-controls">
                                    <button class="btn btn-primary" type="button" id="labtest">Lab Test</button>
                                    
                            </div>
            </form>
    </div>
</div>

@stop