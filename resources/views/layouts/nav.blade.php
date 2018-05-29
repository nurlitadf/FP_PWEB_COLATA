@if (Route::has('login'))
    <div class="top-right links header clear">
    	
    	<div style="float: left">
	    	<a class="logocolata" href="{{ url('/') }}">
	    		<img src="{{asset('images/logocolata.png')}}" alt>
	    	</a>
    	</div>

    	@yield('navcontent')

    	<div style="float: right;">
    		@if(Request::is('/register') OR Request::is('/'))
    			@auth
            		<a class="navlink" href="{{ url('/home') }}">Home</a>
        		@else
            		<a class="navlink" href="{{ route('register') }}">Register</a>
            		<a class="navlink" href="{{ route('login') }}">Login</a>
        		@endauth
        	@else
        		@guest
		            <a class="navlink" href="{{ route('register') }}">Register</a>
            		<a class="navlink" href="{{ route('login') }}">Login</a>
		        @else
		            <div class="nav-item dropdown" style="float: right;">
		                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
		                    {{ Auth::user()->name }}
		                </a>

		                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		                    <a class="dropdown-item" href="{{ route('viewprofile') }}" onclick="event.preventDefault(); document.getElementById('view-profile').submit();">
		                    	Profile
		                    </a>

		                    <form id="view-profile" action="{{ route('viewprofile') }}" method="GET">
                    			{{csrf_field()}}
                			</form>

                			<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
		                        {{ __('Logout') }}
		                    </a>

		                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                        {{ csrf_field() }}
		                    </form>
		                </div>
		            </div>
		            <img alt="User Pic" src="/storage/img/{{ Auth::user()->avatar }}" class="img-circle img-responsive" style="float: right; height: 45px; padding-right: 20px; padding: 5px;">
		        @endguest
    		@endif
      	</div>
    </div>
@endif

