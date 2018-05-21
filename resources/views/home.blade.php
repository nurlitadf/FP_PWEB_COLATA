@extends('layouts.master')

@section('content')
    @include('layouts.nav')
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="nav flex-column nav-pills col-md-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" href="{{ url('/home') }}">Home</a>
                <a class="nav-link" id="v-pills-boards-tab" href="{{ url('/board') }}">Boards</a>
            </div>
            
            <div class="tab-content col-md-7" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home">
                Yay
                </div>
                
                <div class="tab-pane fade" id="v-pills-boards">
                    <div class="personalboard">
                        <h3>Personal Board</h3>
                    </div>
                </div>
            
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
                <form action="/adds" method="POST">
			{{csrf_field()}}
                    <div class="modal-header" style="padding-bottom: 50px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <input class="form-control form-control-sm" id="createboardmodallabel" type="text" placeholder="Add Board Title" style="width: 75%;" name="title">
                        <div id="change-color" class="input-group colorpicker-component" style="width: 50%; margin-top: 10px;">
                            <input type="text" value="" class="form-control" placeholder="Change Background Color" name="color" />
                            <span class="input-group-addon"><i></i></span>
                            <input type="hidden" name="username" value="{{Auth::user()->username}}">
                        </div>
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
    <script src="{{asset('js/bootstrap-colorpicker.js')}}"></script>
    <script>
        $('#change-color').colorpicker().on('changeColor', function(e){
            console.log(e.color.toString('rgba'));
            var background_color = e.color.toString('rgba');
            $('.modal-header')[0].style.backgroundColor = background_color;
        });
        function submit(){
            var titles = $('#createboardmodallabel').value;
            var colour = $('#bg').value;
        }
    </script>
@endsection
