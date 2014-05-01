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
    <input type="hidden" value="{{$pid}}" id="pid" />
    <label class="checkbox">
    <input type="checkbox" class="labreqrep"   id="inlineCheckbox1" value="Bs for MPs.../200WBC"> Bs for MPs.../200WBC
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="Haemoglobin.../dl"> Haemoglobin.../dl
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Sickling Test..."> Sickling Test...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Haemogram(Full Blood Picture)..."> Haemogram(Full Blood Picture)...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="ESR...mm/hr"> ESR...mm/hr
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Bleeding Time..."> Bleeding Time...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Clotting Time..."> Clotting Time...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="P.T"> P.T
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="PTT"> PTT
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="B/Group RH Factors..."> B/Group RH Factors...
    </label>
    <h5>2.SEROLOGY</h5>
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="HIV..."> HIV...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="CD4/CD8 Profile..."> CD4/CD8 Profile...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="VDRL..."> VDRL...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Widal Test..."> Widal Test...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="TPHA..."> TPHA...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="HB sAg..."> HB sAg...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="R.Factors..."> R.Factors...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="H.PYLORI..."> H.PYLORI...
    </label>
</div>

<div class="span2 control-group">
	<h5>3.URINALYSIS</h5>
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="Color..."> Color...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="PH..."> PH...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="SP Gravity..."> SP Gravity...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Glucose..."> Glucose...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Protein..."> Protein...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Ketones..."> Ketones...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Urobilinogen..."> Urobilinogen...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="WBs..."> WBs...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="RBC..."> RBC...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="EP Sales..."> EP Sales...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Yeast Cells..."> Yeast Cells...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Crystals..."> Crystals...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Ova..."> Ova...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Others..."> Others...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="C/S..."> C/S...
    </label>
    <h5>4.OTHERS</h5>
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="HVs"> HVs
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="Semenalanalysis"> Semenalanalysis
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="PSA"> PSA
    </label>
</div>

<div class="span2 control-group">
<h5>5.BIOCHEMISTRY</h5>
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="RBG.Fasting...mmo/l">  RBG.Fasting...mmo/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="Random...mml/l"> Random...mml/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Cholesterol...mml/l"> Cholesterol...mml/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Uric Acid...mmol/l"> Uric Acid...mmol/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="S.Creatinine...umol"> S.Creatinine...umol
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Urea...mmol/l"> Urea...mmol/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Bilirubin Total...umo/l"> Bilirubin Total...umo/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Direct...umol/l"> Direct...umol/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Indirect...umol/l"> Indirect...umol/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="ALAT...lu/l"> ALAT...lu/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="ASAT...lu/l"> ASAT...lu/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Alkaline phos...lu/l"> Alkaline phos...lu/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="S.Amylase..."> S.Amylase...
    </label>

    <h5>6.ELECTROLYTE</h5>
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="K+"> K+
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="Na"> Na
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Cl"> Cl
    </label>
    <div class="control-group">
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="HCO3"> HCO3
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="Ca"> Ca
    </label>
</div>
</div>

<div class="span2 control-group">
<h5>7.STOOL</h5>
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="Appearance.."> Appearance..
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="WBC..."> WBC...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="RBC..."> RBC...
    </label>
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="Macrophages.."> Macrophages..
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="Ova/Cyst..."> Ova/Cyst...
    </label>
    
    <h5>8.BODY FLUIDS(S'fy)</h5>
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="Appearance..."> Appearance...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="ZN-Stain..."> ZN-Stain...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Gram Stain..."> Gram Stain...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="C/S..."> C/S...
    </label>

    <h5>9.HORMONES</h5>
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="Prolactin..."> Prolactin...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="FSH..."> FSH...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="L.H...
"> L.H...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="TSH,T3,T4..."> TSH,T3,T4...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Progesterone..."> Progesterone...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Testosterone..."> Testosterone...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="Androgen..."> Androgen...
    </label>
</div>
<div class="form-controls">
        <button class="btn btn-primary" type="button" id="labtest">Lab Test</button>
        
</div>
</form>
</div>
</div>

@stop