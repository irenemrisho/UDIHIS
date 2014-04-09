$(function () {
	
	Application.init ();
	
});



var Application = function () {
	
	return { init: init };
	
	function init () {
		
		enableBackToTop ();

	}

	function enableBackToTop () {
		var backToTop = $('<a>', { id: 'back-to-top', href: '#top' });
		var icon = $('<i>', { class: 'icon-chevron-up' });

		backToTop.appendTo ('body');
		icon.appendTo (backToTop);
		
	    backToTop.hide();

	    $(window).scroll(function () {
	        if ($(this).scrollTop() > 150) {
	            backToTop.fadeIn ();
	        } else {
	            backToTop.fadeOut ();
	        }
	    });

	    backToTop.click (function (e) {
	    	e.preventDefault ();

	        $('body, html').animate({
	            scrollTop: 0
	        }, 600);
	    });
	}
	
}();


//////////////////////////////////////////////////////////////////////////////////


$(document).ready(function(){
	$(".deleteuser").click(function(){
                var id1 = $(this).parent().attr('id');
                $(".deleteuser").show("slow").parent().find("span").remove();
                var btn = $(this).parent().parent();
                $(this).hide("slow").parent().append("<span><br>Delete? <br /> <a href='#s' id='yes' class='btn btn-success btn-mini'><i class='fa fa-check'></i> Y</a> <a href='#s' id='no' class='btn btn-danger btn-mini'> <i class='fa fa-times'></i> N</a></span>");
                $("#no").click(function(){
                    $(this).parent().parent().find(".deleteuser").show("slow");
                    $(this).parent().parent().find("span").remove();
                });
                $("#yes").click(function(){
                    $(this).parent().html("<br><i class=''></i><span style='font-size: 11px; color:red'>deleting...</span>");
                    $.post("users/delete/"+id1,function(data){
                      btn.hide("slow").next("hr").hide("slow");
                   });
                });
 });//endof deleting category

	$('.fetchuser').on('click', function(){
		$('#ajax').show();
		var uid  = $(this).parent().attr('id');
		$.get('loaduser/' + uid, function(data){
			$('#ajax').hide();
			$('#user_content').html(data);
		});
	});

	$('#save').on('click', function(){
		var action = $('#editform').attr('action');
		var url    = $('#editform').attr('url');
		var email       = $('#email').val();
		var first_name  = $('#first_name').val();
		var last_name	= $('#last_name').val();
		var middle_name = $('#middle_name').val();
		var contact     = $('#contact').val();
		var level       = $('#level').val();
		var address     = $('#address').val();
		$('#ajax').show();
		$('#editform').css('opacity', '0.2');
		$.post(action, {e:email, fn:first_name, ln:last_name, mn:middle_name, c:contact, l:level, a:address}, function(data){
			$('#ajax').hide();
			$('#alrt').fadeIn(1000, function(){
				window.location = url;
			});
		})
	});	

});