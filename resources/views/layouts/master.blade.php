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

	<link rel="shortcut icon" type="image/png" href="/images/logo.png"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/styles.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap-colorpicker.css')}}">


	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	
	@yield('content')

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>
 
    <script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.1.1.min.js"><\/script>')</script>
    <script src="{{asset('js/script.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}" defer></script>
    
    <script src="{{asset('js/parallax.min.js')}}" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
		var scene = document.getElementById('scene');
		var parallax = new Parallax(scene);
	</script>

    <script src="{{asset('js/skrollr.min.js')}}" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
	window.onload = function() {
		document.getElementById("preloader").style.display = 'none';
		skrollr.init({
			forceHeight: false
		});
	}
	</script>

	<div id="preloader"></div>
</body>
</html>