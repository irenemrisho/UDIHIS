@extends('dashboard')
@section('main')
    <h1 class="page-title">
                    <i class="icon-th-large"></i>
                    Print Appointment Card    
                </h1>
                                       
<div class="row">
<div class="span9">
<div class="widget-content">

    <div style="text-align:center">
        <canvas id="app_card_canvas" width="520" height="300"></canvas>

        <script type="text/javascript">

            function save_image() {
                // alert("ndowski");
                var dataURL = canvas.toDataURL("Image/png");
                document.getElementById("app_card_image").src=dataURL;
            }

            var canvas = document.getElementById('app_card_canvas');
            var context = canvas.getContext('2d');

                var bg = new Image();
                bg.onload = function() {
                    context.drawImage(bg, 1, 1,520,300);

                    context.font = " normal 12px tahoma";

                    context.fillText("{{Patient::fullname($newpatient)}}",100,162);
                    context.fillText("{{$newpatient->filenumber}}",120,183);
                    context.fillText("{{ date('D d M Y',time()) }}",140,205);
                };
                bg.src="{{ asset('packages/bootstrap/img/app_card.png')}}";


        </script>
    </div>

    <hr>

    <div style="text-align:center">    
     <button class="btn-primary" onMouseDown="save_image()">print card</button><br> 

     <img src="" id="app_card_image" alt="appointment-card-here">
    </div>

</div>
</div>
</div>


@stop