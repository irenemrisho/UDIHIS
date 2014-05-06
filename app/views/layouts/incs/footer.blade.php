
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
{{HTML::script('packages/bootstrap/js/select2.min.js')}}
{{HTML::script('packages/bootstrap/js/bootstrap-tokenfield.js')}}

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

	$('#tokenfield').tokenfield({
	  autocomplete: {
	    source: {{$jsons}},
	    delay: 100
	  },
	  showAutocompleteOnFocus: false
	});

	$('#tokenfield2').tokenfield({
	  autocomplete: {
	    source: ['1x1','1x2','1x3','2x1','2x2','2x3','3x1','3x2','3x3'],
	    delay: 100
	  },
	  showAutocompleteOnFocus: false
	});
	

	$('#prescribedmedicine').autocomplete({
        source :  {{$jsons}},
        select: function( event, ui ) {
          var terms = [];
          // remove the current input
          terms.pop();
          // add the selected item
          terms.push( ui.item.value );
          // add placeholder to get the comma-and-space at the end
          terms.push( "" );
          this.value = terms.join( ", " );
          return false;
        }
    });	
});
    
</script>
@endif

@endif
</body>
</html>