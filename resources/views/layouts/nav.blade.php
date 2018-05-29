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
		            <div class="nav-item dropdown">
		                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
		                    {{ Auth::user()->name }} <span class="caret"></span>
		                </a>

		                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
		                        {{ __('Logout') }}
		                    </a>

		                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                        {{ csrf_field() }}
		                    </form>
		                </div>
		            </div>
		        @endguest
    		@endif
      	</div>
    </div>
@endif

