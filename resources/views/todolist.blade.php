<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<hi>HAI</hi>
	@foreach($todolist as $p)
	{{$p->title}}
	@endforeach
</body>
</html>