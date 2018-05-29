@extends('layouts.master')

@section('content')
    @include('layouts.nav')
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="nav flex-column nav-pills col-md-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" href="{{ url('/home') }}">Home</a>
                <a class="nav-link" id="v-pills-boards-tab" href="{{ url('/board') }}">Boards</a>
            </div>
            
            <div class="col-md-7">
                <div class="homecontent">
                    <div style="padding-left: 50px; padding-right: 50px;">
                        <canvas id="canvas" width="500" height="500" style="max-height: 400px;"></canvas>
                    </div>
                </div>
                @yield('boardcontent')
            </div>
            
            <div class="col-md-3">
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#createboardmodal">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    Create Board
                </button>
            </div>
        </div>

        <div class="modal fade" id="createboardmodal" tabindex="-1" role="dialog" aria-labelledby="createboardmodallabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{route('adds') }}" method="POST">
			     {{csrf_field()}}
                    <div class="modal-header" style="padding-bottom: 50px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <input class="form-control form-control-sm" id="createboardmodallabel" type="text" placeholder="Add Board Title" style="width: 75%;" name="title">
                        <div id="change-color" class="input-group colorpicker-component" style="width: 50%; margin-top: 10px;">
                            <input type="text" value="" class="form-control" placeholder="Change Background Color" name="background" />
                            <span class="input-group-addon"><i></i></span>
                        </div>
                        <input type="hidden" name="username" value="{{Auth::user()->username}}">
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="submit">Create Board</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.2/js/bootstrap-colorpicker.js" integrity="sha256-8Nlu4neAzrQQ1uUN7ebQuMlACoFlPzY6d2ELaq6MQlE=" crossorigin="anonymous"></script>
    <script>
        $('#change-color').colorpicker().on('changeColor', function(e){
            console.log(e.color.toString('rgba'));
            var background_color = e.color.toString('rgba');
            $('.modal-header')[0].style.backgroundColor = background_color;
        });
        function submit(){
            var titles = $('#createboardmodallabel').value;
            var colour = $('#bg').value;
        };

        var canvas = document.getElementById("canvas");
        var ctx = canvas.getContext("2d");

        ctx.strokeStyle = '#00ffff';
        ctx.lineWidth = 17;
        ctx.shadowBlur= 15;
        ctx.shadowColor = '#00ffff'

        function degToRad(degree){
            var factor = Math.PI/180;
            return degree*factor;
        }

        function renderTime(){
            var now = new Date();
            var today = now.toDateString();
            var time = now.toLocaleTimeString();
            var hrs = now.getHours();
            var min = now.getMinutes();
            var sec = now.getSeconds();
            var mil = now.getMilliseconds();
            var smoothsec = sec+(mil/1000);
            var smoothmin = min+(smoothsec/60);

            //Background
            gradient = ctx.createRadialGradient(250, 250, 5, 250, 250, 300);
            gradient.addColorStop(0, "white");
            gradient.addColorStop(1, "white");
            ctx.fillStyle = gradient;
            //ctx.fillStyle = 'rgba(00 ,00 , 00, 1)';
            ctx.fillRect(0, 0, 500, 500);
            //Hours
            ctx.beginPath();
            ctx.arc(250,250,200, degToRad(270), degToRad((hrs*30)-90));
            ctx.stroke();
            //Minutes
            ctx.beginPath();
            ctx.arc(250,250,170, degToRad(270), degToRad((smoothmin*6)-90));
            ctx.stroke();
            //Seconds
            ctx.beginPath();
            ctx.arc(250,250,140, degToRad(270), degToRad((smoothsec*6)-90));
            ctx.stroke();
            //Date
            ctx.font = "25px Helvetica";
            ctx.fillStyle = 'rgba(00, 255, 255, 1)'
            ctx.fillText(today, 175, 250);
            //Time
            ctx.font = "25px Helvetica Bold";
            ctx.fillStyle = 'rgba(00, 255, 255, 1)';
            ctx.fillText(time+":"+mil, 175, 280);

        }
        setInterval(renderTime, 40);

    </script>
@endsection
