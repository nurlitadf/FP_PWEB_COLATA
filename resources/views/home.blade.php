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
                One of three columns
            </div>
        </div>
    </div>
@endsection