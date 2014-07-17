
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Bootstrap includes -->
{{HTML::script('packages/bootstrap/js/jquery-1.9.1.min.js')}}
{{HTML::script('packages/bootstrap/js/ui.js')}}
{{HTML::script('packages/bootstrap/js/helper.js')}}
{{HTML::script('packages/bootstrap/js/bootstrap.min.js')}}
{{HTML::script('packages/bootstrap/js/jquery.easyWizard.js')}}
{{HTML::script('packages/charts/js/highcharts.js')}}
{{ HTML::script("Highcharts/modules/exporting.js") }}
{{HTML::script('packages/bootstrap/js/jquery.printElement.min.js')}}
{{HTML::script('packages/bootstrap/js/Application.js')}}
{{HTML::script('packages/bootstrap/js/timepicker.js')}}

 @yield('page_specific_scripts-highchart')

 @yield('page_specific_scripts')
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
	$(".try").click(function(){
        var id1 = $(this).parent().attr('id');
        $(".try").show("slow").parent().find("span").remove();
        var btn = $(this).parent().parent();
        $(this).hide("slow").parent().append("<span><br>Delete? <br /> <a href='#s' id='yes' class='btn btn-success btn-mini'><i class='fa fa-check'></i> Y</a> <a href='#s' id='no' class='btn btn-danger btn-mini'> <i class='fa fa-times'></i> N</a></span>");
        $("#no").click(function(){
            $(this).parent().parent().find(".try").show("slow");
            $(this).parent().parent().find("span").remove();
        });
        $("#yes").click(function(){
            $(this).parent().html("<br><i class=''></i><span style='font-size: 11px; color:red'>deleting...</span>");
            $.post("billing/delete/"+id1,function(data){
                btn.hide("slow").next("hr").hide("slow");
            });
        });
    });

	$('#tokenfield').tokenfield({
	  autocomplete: {
	    source: {{$jsons}},
	    delay: 100
	  },
	  showAutocompleteOnFocus: false
	});

	// $('#tokenfield2').tokenfield({
	//   autocomplete: {
	//     source: ['1x1x2','1x2x4','1x3x6','2x1x7','2x2x4','2x3x2','3x1x4','3x2x8','3x3x10'],
	//     delay: 100
	//   },
	//   showAutocompleteOnFocus: false
	// });
	

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

<script type="text/javascript">
	$('#gent').on('click', function(){
		var gender      = $('#gender').val();
		var report      = $('#report').val();
		var reporttype  = $('#reporttype').val();
		var dt          = $('#dt').val();
		if(gender==""||report==""||reporttype==""||dt==""){
			alert("Please fill the fields");
		}else{

			$('#loader').show();
			$('#iload').css('opacity', '0.2');
			$.post('doctor/getReports', {g:gender, rpt:report, rptt:reporttype, dt:dt}, function(data){
				$('#loader').hide();
				$('#iload').css('opacity', '1');
				$('#ireport').hide().html(data).fadeIn(1000);
			});
		}
	});
</script>
</body>
</html>