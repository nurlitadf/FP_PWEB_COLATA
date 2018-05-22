<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<hi>HAI</hi>
	@foreach($todolist as $p)
	{{$p->title}}<br>
	@endforeach
	<br>
	<form action="/addtodolist" method="POST">
		{{csrf_field()}}
		<input type="text" name="title">
		<input type="datetime" name="deadline">
		<input type="text" name="keterangan">
		<input type="hidden" name="board_id" value={{$todolist[0]->board_id}} >
		<input type="text" name="status">
		<button type="submit">Submit</button>
	</form>
</body>
</html>