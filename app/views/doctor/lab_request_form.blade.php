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
    <input type="checkbox" class="labreqrep"   id="inlineCheckbox1" value="HAEMATOLOGY_Bs for MPs.../200WBC"> Bs for MPs.../200WBC
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="HAEMATOLOGY_Haemoglobin.../dl"> Haemoglobin.../dl
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="HAEMATOLOGY_Sickling Test..."> Sickling Test...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="HAEMATOLOGY_Haemogram(Full Blood Picture)..."> Haemogram(Full Blood Picture)...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="HAEMATOLOGY_ESR...mm/hr"> ESR...mm/hr
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="HAEMATOLOGY_Bleeding Time..."> Bleeding Time...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="HAEMATOLOGY_Clotting Time..."> Clotting Time...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="HAEMATOLOGY_P.T"> P.T
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="HAEMATOLOGY_PTT"> PTT
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="HAEMATOLOGY_B/Group RH Factors..."> B/Group RH Factors...
    </label>
    <h5>2.SEROLOGY</h5>
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="SEROLOGY_HIV..."> HIV...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="SEROLOGY_CD4/CD8 Profile..."> CD4/CD8 Profile...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="SEROLOGY_VDRL..."> VDRL...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="SEROLOGY_Widal Test..."> Widal Test...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="SEROLOGY_TPHA..."> TPHA...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="SEROLOGY_HB sAg..."> HB sAg...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="SEROLOGY_R.Factors..."> R.Factors...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="SEROLOGY_H.PYLORI..."> H.PYLORI...
    </label>
</div>

<div class="span2 control-group">
	<h5>3.URINALYSIS</h5>
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="URINALYSIS_Color..."> Color...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="URINALYSIS_PH..."> PH...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="URINALYSIS_SP Gravity..."> SP Gravity...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="URINALYSIS_Glucose..."> Glucose...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="URINALYSIS_Protein..."> Protein...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="URINALYSIS_Ketones..."> Ketones...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="URINALYSIS_Urobilinogen..."> Urobilinogen...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="URINALYSIS_WBs..."> WBs...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="URINALYSIS_RBC..."> RBC...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="URINALYSIS_EP Sales..."> EP Sales...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="URINALYSIS_Yeast Cells..."> Yeast Cells...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="URINALYSIS_Crystals..."> Crystals...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="URINALYSIS_Ova..."> Ova...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="URINALYSIS_Others..."> Others...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="URINALYSIS_C/S..."> C/S...
    </label>
    <h5>4.OTHERS</h5>
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="OTHERS_HVs"> HVs
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="OTHERS_Semenalanalysis"> Semenalanalysis
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="OTHERS_PSA"> PSA
    </label>
</div>

<div class="span2 control-group">
<h5>5.BIOCHEMISTRY</h5>
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="BIOCHEMISTRY_RBG.Fasting...mmo/l">  RBG.Fasting...mmo/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="BIOCHEMISTRY_Random...mml/l"> Random...mml/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="BIOCHEMISTRY_Cholesterol...mml/l"> Cholesterol...mml/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="BIOCHEMISTRY_Uric Acid...mmol/l"> Uric Acid...mmol/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="BIOCHEMISTRY_S.Creatinine...umol"> S.Creatinine...umol
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="BIOCHEMISTRY_Urea...mmol/l"> Urea...mmol/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="BIOCHEMISTRY_Bilirubin Total...umo/l"> Bilirubin Total...umo/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="BIOCHEMISTRY_Direct...umol/l"> Direct...umol/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="BIOCHEMISTRY_Indirect...umol/l"> Indirect...umol/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="BIOCHEMISTRY_ALAT...lu/l"> ALAT...lu/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="BIOCHEMISTRY_ASAT...lu/l"> ASAT...lu/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="BIOCHEMISTRY_Alkaline phos...lu/l"> Alkaline phos...lu/l
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="BIOCHEMISTRY_S.Amylase..."> S.Amylase...
    </label>

    <h5>6.ELECTROLYTE</h5>
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="ELECTROLYTE_K+"> K+
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="ELECTROLYTE_Na"> Na
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="ELECTROLYTE_Cl"> Cl
    </label>
    <div class="control-group">
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="ELECTROLYTE_HCO3"> HCO3
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="ELECTROLYTE_Ca"> Ca
    </label>
</div>
</div>

<div class="span2 control-group">
<h5>7.STOOL</h5>
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="STOOL_Appearance.."> Appearance..
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="STOOL_WBC..."> WBC...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="STOOL_RBC..."> RBC...
    </label>
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="STOOL_Macrophages.."> Macrophages..
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="STOOL_Ova/Cyst..."> Ova/Cyst...
    </label>
    
    <h5>8.BODY FLUIDS(S'fy)</h5>
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="BODY FLUIDS_Appearance..."> Appearance...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="BODY FLUIDS_ZN-Stain..."> ZN-Stain...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="BODY FLUIDS_Gram Stain..."> Gram Stain...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="BODY FLUIDS_C/S..."> C/S...
    </label>

    <h5>9.HORMONES</h5>
    <label class="checkbox">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox1" value="HORMONES_Prolactin..."> Prolactin...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox2" value="HORMONES_FSH..."> FSH...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="HORMONES_L.H...
"> L.H...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="HORMONES_TSH,T3,T4..."> TSH,T3,T4...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="HORMONES_Progesterone..."> Progesterone...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="HORMONES_Testosterone..."> Testosterone...
    </label>
    <label class="checkbox ">
    <input type="checkbox" class="labreqrep" id="inlineCheckbox3" value="HORMONES_Androgen..."> Androgen...
    </label>
</div>
<div class="form-controls">
        <button class="btn btn-primary" type="button" id="labtest">Lab Test</button>
        
</div>
</form>
</div>
</div>

@stop