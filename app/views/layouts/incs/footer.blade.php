
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{{HTML::script('packages/bootstrap/js/jquery-1.9.1.min.js')}}
{{HTML::script('packages/bootstrap/js/ui.js')}}
{{HTML::script('packages/bootstrap/js/helper.js')}}
{{HTML::script('packages/bootstrap/js/bootstrap.min.js')}}
{{HTML::script('packages/bootstrap/js/excanvas.min.js')}}
{{HTML::script('packages/bootstrap/js/jquery.flot.js')}}
{{HTML::script('packages/bootstrap/js/jquery.flot.pie.js')}}
{{HTML::script('packages/bootstrap/js/jquery.flot.orderBars.js')}}
{{HTML::script('packages/bootstrap/js/jquery.flot.resize.js')}}
{{HTML::script('packages/bootstrap/js/bar/bar.js')}}
{{HTML::script('packages/bootstrap/js/jquery.easyWizard.js')}}
{{HTML::script('packages/bootstrap/js/Application.js')}}
<div id="rights" style="text-align:center;">
        ©13-14 UDIHIS
    </div>

@if (Auth::check())
@if(Auth::user()->level == 4) 
<?php

	$medicines = Medicine::all();
	$mdx       = array();
	foreach ($medicines as $m) {
		# code...
		$mdx[] = $m->name;
	}

	$jsons = json_encode($mdx);


?> 
<script type="text/javascript">
$(document).ready(function(){
	$('#prescribedmedicine').autocomplete({
        source :  {{$jsons}}
    });	
});
    
</script>
@endif

@endif
</body>
</html>