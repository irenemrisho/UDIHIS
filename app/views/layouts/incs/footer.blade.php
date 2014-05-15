
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Bootstrap includes -->
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
{{HTML::script('packages/bootstrap/js/timepicker.js')}}

    
    @yield('page_specific_scripts')

{{HTML::script('packages/bootstrap/js/select2.min.js')}}
{{HTML::script('packages/bootstrap/js/bootstrap-tokenfield.js')}}

=======
 @yield('page_specific_scripts')
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
	    source: ['1x1x2','1x2x4','1x3x6','2x1x7','2x2x4','2x3x2','3x1x4','3x2x8','3x3x10'],
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
     $('#example').dataTable( {
        "paging":   true,
        "ordering": true,
        "info":     true
    } );
});
    
</script>

@endif

@if(Auth::user()->level == 2) 

<script type="text/javascript">


	$(document).ready(function(){
		@if(Laboratory::whereRaw('tested = FALSE')->count() != 0)
			setInterval(function(){
				$.get('getTests', function(data){
						$('#labtest').hide().text(data).fadeIn(2000);
					});
			}, 2000);
		@endif
	});
</script>
@endif

@endif
</body>
</html>