@extends('layouts.master')

@section('content')
    @include('layouts.nav')
    <header style="background: url('/images/todo.png');">
        <div class="container">
            <div class="text home">
                <h1>Organize Life</h1>
                <p class="red">Then go enjoy it...</p>
                <button type="button" class="btn btn-danger" onclick="window.location='{{ route('register') }}'">Get Started - It's Free</button>
                
                <span>
                    <p style="float: left">Already use Colata?</p>
                    <a style="float: left" href="{{ route('login') }}">Log In</a>
                </span>
            </div>
        </div>

    </header>
    
    <section class="intro">
        <div class="container center">
            <h2>Colata lets you work more collaboratively and get more done.</h2>
            <p>Apakah kalian termasuk mahasiswa yang pandai dalam memanajemen waktu antara akademik dan kegiatan kampus? Salah satu langkah yang harus dilakukan untuk menjadi mahasiswa luar biasa adalah manajemen waktu. Terkadang kita lupa mana yang harus kita lakukan, mana prioritas kita. Colata siap membantu anda!</p>
        </div>
    </section>

    <section class="feature grey" id="scene">
        <div class="container">
            <div class="row project remember">
                <div class="col-lg-4 col-md-6 text">
                    <h2>Never worry about forgetting things again</h2>
                    <p>Biarkan Colata yang mengingatnya. Kamu bisa mengingat semua plan mu diluar kepala dan mengaturnya kapanpun dan dimanapun.</p>
                </div>

                <div class="col-lg-8 col-md-6 image safarifix" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                    <img class="main" src="/images/remember.png" alt>
                    <div class="icons">
                        <img class="icon layer skrollable" data-600="margin-top: 130px" data-1400="margin-top: 0px" data-depth="0.35" src="/images/remembericon1.png" alt syle="margin-top: 130px; transform: translate3d(13.4px, 10px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">

                        <img class="icon layer skrollable" data-600="margin-right: -50px" data-2000="margin-right: 50px" data-depth="0.55" src="/images/remembericon2.png" alt syle="margin-right: -50px; transform: translate3d(21px, 15.7px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">

                        <img class="icon layer skrollable" data-600="margin-left: -200px" data-2000="margin-left: 50px" data-depth="0.35" src="/images/remembericon3.png" alt syle="margin-left: -200px; transform: translate3d(13.4px, 10px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                    </div>
                </div>
            </div>

            <div class="row project team">
                <div class="col-lg-4 col-md-6 text">
                    <h2>Work With Any Team</h2>
                    <p>Untuk pekerjaan, untuk organisasi, untuk perjalanan keluarga, dan entah untuk apapun itu Colata akan membantumu agar tetap terhubung dengan tim-mu.</p>
                </div>

                <div class="col-lg-8 col-md-6 image safarifix" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                    <img class="main" src="/images/team.png" alt>

                    <div class="icons">
                        <span class="circle layer skrollable" data-depth="0.40" data-1000="margin-top:400px" data-3000="margin-top:-300px" style="margin-top: 400px; transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"></span>
                        <span class="circle layer skrollable" data-depth="0.90" data-1000="margin-top:200px" data-3000="margin-top:-100px" style="margin-top: 200px; transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"></span>
                        <span class="circle line layer skrollable" data-depth="0.80" data-1000="margin-top:600px" data-3000="margin-top:-550px" style="margin-top: 600px; transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"></span>
                        <span class="circle line layer skrollable" data-depth="0.70" data-1000="margin-top:-200px" data-2000="margin-top:400px" data-2500="margin-top:300px" style="margin-top: -200px; transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"></span>

                    </div>
                </div>
            </div>
        </div> 
    </section>

    <div class="contact cta">
        <div class="container layer" data-depth=".2">
            <p class="white">What are you waiting for?</p>
            <button type="button" class="btn btn-outline-light" style="margin-top: 35px;">Sign Up for free</button>
        </div>
    </div>

    <footer class="quiet">
        <p>Ayam Goreng. Copyright 2018. All rights reserved.</p>
    </footer>
        

    
    
@endsection