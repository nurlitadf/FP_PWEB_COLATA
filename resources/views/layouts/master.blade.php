<!DOCTYPE html>
<html lang="en" class="skrollr skrollr-desktop">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="utf-8">

	<title>Colata</title>
	
	<meta property="og:title" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:site_name" content="">
	<meta property="og:description" content="">

	<link rel="shortcut icon" type="image/png" href="{{ asset('/images/logo.png') }}"/>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/styles.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.2/css/bootstrap-colorpicker.css" integrity="sha256-iu+Hq7JHYN0rAeT3Y+c4lEKIskeGgG/MpAyrj6W9iTI=" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" integrity="sha256-oDCP2dNW17Y1QhBwQ+u2kLaKxoauWvIGks3a4as9QKs=" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://cdn.rawgit.com/mdehoog/Semantic-UI-Calendar/76959c6f7d33a527b49be76789e984a0a407350b/dist/calendar.min.css" rel="stylesheet" type="text/css" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js" integrity="sha256-v00gso3ox/d0KLJDJew6+zm29+J39rYWZvOgoXzDtCs=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js" integrity="sha256-rUSIjmg03RQ3LWNpEkVRPNoXytm7f1rJ3xAWO6gxCPc=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.2/js/bootstrap-colorpicker.min.js" integrity="sha256-abMleym04oGvyo3njT8/hYNLYOp7lGTUGHCCnGt3pV4=" crossorigin="anonymous"></script>
	<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI-Calendar/76959c6f7d33a527b49be76789e984a0a407350b/dist/calendar.min.js"></script>

	<script src="{{asset('js/script.min.js')}}"></script>

	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
	
	@yield('content')
 
    <script type="text/javascript">
		var scene = document.getElementById('scene');
		var parallax = new Parallax(scene);
	</script>

	<script type="text/javascript">
	window.onload = function() {
		document.getElementById("preloader").style.display = 'none';
		skrollr.init({
			forceHeight: false
		});
	}
	</script>

	@if(Request::is('/register') OR Request::is('/'))
    @else
        <script type="text/javascript">
        	$(document).ready(function() {
        		$('.header').addClass('header-sticky');
    		});
					
		</script>
	@endif

	<div id="preloader"></div>
</body>
</html>