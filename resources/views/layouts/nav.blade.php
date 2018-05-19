@if (Route::has('login'))
    <div class="top-right links header clear">
    	
    	<div style="float: left">
	    	<a class="logocolata" href="{{ url('/') }}">
	    		<img src="images/logocolata.png" alt>
	    	</a>
    	</div>

    	<div style="float: right;">
	    	@auth
	    		<a class="navlink" href="{{ url('/home') }}">Home</a>
	    	@else
	    		<a class="navlink" href="{{ route('register') }}">Register</a>
	        	<a class="navlink" href="{{ route('login') }}">Login</a>
	      	@endauth
      	</div>
    </div>
@endif