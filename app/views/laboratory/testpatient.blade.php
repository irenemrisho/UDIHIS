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
                               @foreach($patients as $patient)
                               <label class="checkbox">
                               <input type="checkbox" class="labreqrep"   id="inlineCheckbox1" value="end"> {{$patient->test_type}}
                               </label>

                               @endforeach
                                
                                <h5>2.SEROLOGY</h5>
                                
                            </div>

                            <div class="span2 control-group">
                            	<h5>3.URINALYSIS</h5>
                                
                                
                                <h5>4.OTHERS</h5>
                                
                            </div>

                            <div class="span2 control-group">
                            <h5>5.BIOCHEMISTRY</h5>
                                
                                
                                <h5>6.ELECTROLYTE</h5>
                                
                            </div>
                            </div>

                            <div class="span2 control-group">
                            <h5>7.STOOL</h5>
                                
                                
                                <h5>8.BODY FLUIDS(S'fy)</h5>
                                

                                <h5>9.HORMONES</h5>
                                
                            </div>
                            <div class="form-controls">
                                    <button class="btn btn-primary" type="button" id="labtest">Lab Test</button>
                                    
                            </div>
            </form>
    </div>
</div>

@stop