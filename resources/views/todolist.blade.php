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
	USER YANG JOIN: <br>
	@foreach($user as $u)
	{{$u->username}}
	@endforeach
	<br>
	<form action="/addtodolist" method="POST">
		{{csrf_field()}}
		Title :<input type="text" name="title"><br>
		Deadline :<input type="datetime" name="deadline"><br>
		Ket :<input type="text" name="keterangan"><br>
		<input type="hidden" name="board_id" value={{$id}} >
		Status :<input type="text" name="status">
		<button type="submit">Submit</button>
	</form><br>
	<form action="/invite" method="POST">
		{{csrf_field()}}
		Invite User : <input type="text" name="username">
		<input type="hidden" name="board_id" value={{$id}} >
		<button type="submit">Invite</button>
	</form>
</body>
</html>