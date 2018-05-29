<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
</head>
<body>
	Nama : {{Auth::user()->name}} <br>
	Username : {{Auth::user()->username}} <br>
	Email : {{Auth::user()->email}} <br>

	<form action={{ route('editprofile') }} method="get">
		{{csrf_field()}}
		<button type="submit">Edit Profile</button>
	</form>
</body> 
</html>