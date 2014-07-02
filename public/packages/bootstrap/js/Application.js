
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

$(document).ready(function(){

    //request_provide

    $('#From, #To').datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        maxDate: 0,
        yearRange: "-100:+0" ,
        showMonths: [3,3]
    });

    $('#report').on('change', function(){
        var r = $(this).val();
        if(r == "daily"){
            $('#date').fadeIn(1300);
        }else{
            $('#date').hide();
        }
    });

    $('#go').on('click', function(){
        var from       = $('#From').val();
        var to         = $('#To').val();
        var reporttype = $('#reporttype').val();
        if(from == "" || to == "" || reporttype == ""){
                alert("Please fill the fields");
        }else{
                    $('#loader').show();
                    $('#iload').css('opacity', '0.2');

                    $.post('generateReports', {from:from, to:to, reporttype: reporttype} , function(data){

                        if(reporttype == "Table"){
                             $('#loader').hide();
                             $('#iload').css('opacity', '1');
                             $('#ireport').hide().html(data).fadeIn(1000);
                        }else if(reporttype == "Column" || reporttype == "Line"){
                            //Charts Things go here ......
                            $('#loader').hide();
                            $('#iload').css('opacity', '1');
                            $('#ireport').html('');
                            var obj   = JSON.parse(data);
                            $('#ireport').highcharts({
                                    chart: {
                                        type: obj.chartType 
                                    },
                                    title: {
                                        text: obj.title
                                    },
                                    subtitle: {
                                        text: obj.subtitle
                                    },
                                    xAxis: {
                                        categories: obj.xAxisData
                                    },
                                    yAxis: {
                                        title: {
                                            text: 'Number (#)'
                                        }
                                    },
                                    plotOptions: {
                                        line: {
                                            dataLabels: {
                                                enabled: true
                                            },
                                            enableMouseTracking: false
                                        }
                                    },
                                    series: [{
                                        name: 'Student',
                                        data: obj.yAxisDataStudent
                                    },  {
                                        name: 'Staff',
                                        data: obj.yAxisDataStaff
                                    },
                                        {
                                        name: 'Family members',
                                        data: obj.yAxisDataFamily
                                    },
                                        {
                                        name: 'Private',
                                        data: obj.yAxisDataPrivate
                                    }],
                                });
                        }else if(reporttype == "Pie"){
                            $('#loader').hide();
                            $('#iload').css('opacity', '1');
                            $('#ireport').html('');
                            var obj   = JSON.parse(data);
                             $('#ireport').highcharts({
                                    chart: {
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false
                                    },
                                    title: {
                                        text: obj.title
                                    },
                                    tooltip: {
                                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                                    },
                                    plotOptions: {
                                        pie: {
                                            allowPointSelect: true,
                                            cursor: 'pointer',
                                            dataLabels: {
                                                enabled: true,
                                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                                style: {
                                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                                }
                                            }
                                        }
                                    },
                                    series: [{
                                        type: 'pie',
                                        name: 'Patient Registration',
                                        data: [
                                            ['Family Member',   obj.family_per],
                                            ['Staff',       obj.staff_per],
                                            {
                                                name: 'Student',
                                                y: obj.student_per,
                                                sliced: true,
                                                selected: true
                                            },
                                            ['Private',    obj.private_per]
                                        ]
                                    }]
                                });
                        }else {
                            $('#loader').hide();
                            $('#iload').css('opacity', '1');
                            $('#ireport').html('');
                            var obj   = JSON.parse(data);
                            $('#ireport').highcharts({
                                    title: {
                                        text: obj.title
                                    },
                                    xAxis: {
                                        categories: obj.xAxisData
                                    },
                                    labels: {
                                        items: [{
                                            html: 'Total patient registration',
                                            style: {
                                                left: '50px',
                                                top: '18px',
                                                color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                                            }
                                        }]
                                    },
                                    series: [{
                                        type: 'column',
                                        name: 'Student',
                                        data: obj.yAxisDataStudent
                                    }, {
                                        type: 'column',
                                        name: 'Staff',
                                        data: obj.yAxisDataStaff
                                    }, {
                                        type: 'column',
                                        name: 'Family Members',
                                        data: obj.yAxisDataFamily
                                    },{
                                        type: 'column',
                                        name: 'Private',
                                        data: obj.yAxisDataPrivate
                                    },  {
                                        type: 'pie',
                                        name: 'Patient Registration',
                                        data: [{
                                            name: 'Student',
                                            y: obj.student_per,
                                            color: Highcharts.getOptions().colors[0] // Jane's color
                                        }, {
                                            name: 'Staff',
                                            y: obj.staff_per,
                                            color: Highcharts.getOptions().colors[1] // John's color
                                        }, {
                                            name: 'Family',
                                            y: obj.family_per,
                                            color: Highcharts.getOptions().colors[2] // Joe's color
                                        },{
                                            name: 'Private',
                                            y: obj.private_per,
                                            color: Highcharts.getOptions().colors[2] // Joe's color
                                        }],
                                        center: [100, 80],
                                        size: 100,
                                        showInLegend: false,
                                        dataLabels: {
                                            enabled: false
                                        }
                                    }]
                                });
                        }
                    });
        }
    });


  
    $("[rel=tooltip]").tooltip({ placement: 'right'});

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

   

    $('#attendP').on('click', function(){
        var pid = $('#pid').val();
        window.location = "patient/attend/" + pid;
    });

    

    $('#prescribe1').on('click', function(){
        var pid = $('#pid').val();
        window.location = "patients/prescribe/" + pid;
    });



    $('.fetchPatient').on('click', function(){
        var id = $(this).parent().attr('id');
        $('#table-content').css({
            opacity: 0.1
        });
        $('#loader').show();

        $.post('patients/profile', {pid:id}, function(data){
             $('#loader, #table-content').hide();
             $('#loadpatientinfo').hide().html(data).fadeIn(1500);   
        })

    });

    $('#section').on('change',function(){
        var sect = $(this).val();
        $.post('loadsection', {sect:sect}, function(data){
            $('#section-more').html(data);
               
        });

    });

    $('#section2').on('change',function(){
        var sect = $(this).val();
        $.post('loadsection', {sect:sect}, function(data){
            $('#section-more2').html(data);
               
        });

    });

    $('#insurance1').on('change',function(){
        var sect = $(this).val();
        $.post('loadsection', {sect:sect}, function(data){
            $('#insurance-more').html(data);
               
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

	    //delete campany 
    $(".deleteCampany").click(function(){
        var id1 = $(this).parent().attr('id');
        $(".deleteCampany").show("slow").parent().find("span").remove();
        var btn = $(this).parent().parent();
        $(this).hide("slow").parent().append("<span><br>Delete? <br /> <a href='#s' id='yes' class='btn btn-success btn-mini'><i class='fa fa-check'></i> Y</a> <a href='#s' id='no' class='btn btn-danger btn-mini'> <i class='fa fa-times'></i> N</a></span>");
        $("#no").click(function(){
            $(this).parent().parent().find(".deleteCampany").show("slow");
            $(this).parent().parent().find("span").remove();
        });
        $("#yes").click(function(){
            $(this).parent().html("<br><i class=''></i><span style='font-size: 11px; color:red'>deleting...</span>");
            $.post("billing/delete/"+id1,function(data){
                btn.hide("slow").next("hr").hide("slow");
            });
        });
    });


    //provide_request
        //delete campany 


    $('.fetchuser').on('click', function(){
        $('#ajax').show();
        var uid  = $(this).parent().attr('id');
        $.get('loaduser/' + uid, function(data){
            $('#ajax').hide();
            $('#ajax2').hide();
            $('#user_content').html(data);
        });
    });
    

    
       // $('mydiv').printElement();
  
    

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

    

    $('.fetch-price').on('click', function(){

        var id = $(this).parent().attr('id');
        
        $.post('billing/campanies_price', {id:id}, function(data){
            $('#price_campany').html(data);

        });
    });

    $('.fetch-payments').on('click', function(){
        var id = $(this).parent().attr('id');
        
        $.post('billing/patients_payments', {id:id}, function(data){
            $('#profile').html(data);
        });
    });

    $('.fetch-paid').on('click', function(){

        var id = $(this).parent().attr('id');
        
        $.post('billing/patients_paids', {id:id}, function(data){
            $('#profile2').html(data);
        });
    });

    $('.fetch-recommendation').on('click', function(data){
        var id = $(this).parent().attr('id');
        
        $.post('pharmacy/recommended', {id:id}, function(data){
            $('#profile').html(data);
        });
    });
    
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

    $('#campanyfromdate').datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        
    });

    $('#campanytodate').datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        
    });

    $('#appointment_date').datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        minDate: 0,
        yearRange: "0:+3" ,
        showMonths: [3,3]
    });
   

    $('#appointment_time').timepicker({
        timeOnlyTitle: 'Appointment time'
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

    function toggle(source) {
        checkboxes = document.getElementsByName('add[]');
        for(var i=0, n=checkboxes.length;i<n;i++) {
        checkboxes[i].checked = source.checked;
     }
    }



