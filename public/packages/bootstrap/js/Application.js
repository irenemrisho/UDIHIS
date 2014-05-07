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

    


    $('.alert').fadeOut(3000);

    var tests = [];
    $(".labreqrep").on('change', function(){
        var chk = $(this).is(':checked');
        if(chk == true){
            var labreqrep = $(this).val();
            tests.push(labreqrep);
        }
    });

    $('#labtest').on('click',function(){
        var pid = $('#pid').val();
        var tex = tests;
         $.post(pid,{tex:tex}, function(data){
             window.location.assign(data);
         });
    });

    $('#presc').on('click', function(){
        var data = $('#presform').serializeArray();
        $.post('recommended', data, function(data){
            window.location = "backpatients";
        });
    });

    $('#laboratory').on('click', function(){
        var pid = $('#pid').val();
        window.location = "patients/lab_test/" + pid;
    });

    $('#prescribe').on('click', function(){
        var pid = $('#pid').val();
        window.location = "patients/prescribe/" + pid;
    });

    $('#prescribe1').on('click', function(){
        var pid = $('#pid').val();
        window.location = "patients/prescribe/" + pid;
    });


    $('.fetch-patient').on('click', function(data){
        var id = $(this).parent().attr('id');
        $.post('patients/profile', {id:id}, function(data){
            $('#profile').html(al);
        });
    });

    $('#section').on('change',function(){
        var sect = $(this).val();
        $.post('loadsection', {sect:sect}, function(data){
            $('#section-more').html(data);
        });

    });

    $('.date').datepicker({});

    $('#searchPatient').keyup(function(){
        var patient = $(this).val();
        $('#patients').css('opacity', '0.2');
        $.post('patients/search', {p:patient}, function(data){
            $('#patients').css('opacity', '1');
            $('#patients').html(data);
        });
    });

    $('#search').keyup(function(){
        var user = $(this).val();
        $('#gtable').css('opacity', '0.2');
        $.post('manage_user/search', {u:user}, function(data){
            $('#gtable').css('opacity', '1');
            $('#gtable').html(data);
        });
    });

    $('#search_m').keyup(function(){
        var medicine = $(this).val();
        $('#mtable').css('opacity', '0.2');
        $.post('manage_medicine/search', {u:medicine}, function(data){
            $('#mtable').css('opacity', '1');
            $('#mtable').html(data);
        });
    });

    $('#alert').fadeOut(1000);

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
            $('#ajax2').hide();
            $('#user_content').html(data);
        });
    });

    $('#save').on('click', function(){
        var action = $('#editform').attr('action');
        var url    = $('#editform').attr('url');
        /*var email       = $('#email').val();
         var first_name  = $('#first_name').val();
         var last_name	= $('#last_name').val();
         var middle_name = $('#middle_name').val();
         var phone_no     = $('#phone_no').val();
         var level       = $('#level').val();
         var room_no     = $('#room_no').val();
         var extension_no = $('#extension_no').val();
         var username     = $('#username').val();
         var status      = $("input[name='status']:checked").val();
         {e:email, st:status, fn:first_name, ln:last_name, mn:middle_name, p:phone_no, l:level, xt:extension_no , un:username , rn:room_no }
         */


        var data = $('#editform').serializeArray();

        $('#ajax').show();
        $('#editform').css('opacity', '0.2');
        $.post(action, data, function(data){
            $('#ajax').hide();
            //toString(data);

            $('#alrt').fadeIn(1000, function(){
                window.location = url;
            });
        })
    });

//    $('#myWizard').easyWizard();

});




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



    $('#nextVisit').popover();


    $('.alert').fadeOut(3000);


    $('#presc').on('click', function(){
        alert(2)
        var data = $('#presform').serializeArray();
        $.post('recommended', data, function(data){
            
        });
    });

    $('#laboratory').on('click', function(){
        var pid = $('#pid').val();
        window.location = "patients/lab_test/" + pid;
    });

    $('#prescribe').on('click', function(){
        var pid = $('#pid').val();
        window.location = "patients/prescribe/" + pid;
    });

    $('.fetch-patient').on('click', function(data){
        var id = $(this).parent().attr('id');
        $.post('patients/profile', {id:id}, function(data){
            $('#profile').html(data);
        });
    });

    $('#section').on('change',function(){
        var sect = $(this).val();
        $.post('loadsection', {sect:sect}, function(data){
            $('#section-more').html(data);
        });

    });

    $('#birthdate').datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        maxDate: 0,
        yearRange: "-100:+0" ,
        showMonths: [3,3]
    });

    $('#appointment_date').datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        minDate: 0,
        yearRange: "0:+3" ,
        showMonths: [3,3]
    });

    $('.date').datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        Date: -1   
    });

    $('#search').keyup(function(){
        var user = $(this).val();
        $('#gtable').css('opacity', '0.2');
        $.post('manage_user/search', {u:user}, function(data){
            $('#gtable').css('opacity', '1');
            $('#gtable').html(data);
        });
    });

    $('#alert').fadeOut(1000);

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
            $('#ajax2').hide();
            $('#user_content').html(data);
        });
    });

    $('#save').on('click', function(){
        var action = $('#editform').attr('action');
        var url    = $('#editform').attr('url');
        /*var email       = $('#email').val();
         var first_name  = $('#first_name').val();
         var last_name	= $('#last_name').val();
         var middle_name = $('#middle_name').val();
         var phone_no     = $('#phone_no').val();
         var level       = $('#level').val();
         var room_no     = $('#room_no').val();
         var extension_no = $('#extension_no').val();
         var username     = $('#username').val();
         var status      = $("input[name='status']:checked").val();
         {e:email, st:status, fn:first_name, ln:last_name, mn:middle_name, p:phone_no, l:level, xt:extension_no , un:username , rn:room_no }
         */


        var data = $('#editform').serializeArray();

        $('#ajax').show();
        $('#editform').css('opacity', '0.2');
        $.post(action, data, function(data){
            $('#ajax').hide();
            //toString(data);

            $('#alrt').fadeIn(1000, function(){
                window.location = url;
            });
        })
    });

    $('#myWizard').easyWizard();

});




