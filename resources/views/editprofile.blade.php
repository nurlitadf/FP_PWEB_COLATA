{{-- 






<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
</head>
<body>
	<form action={{route('updateprofile')}} method="post">
		{{csrf_field()}}
		Nama: <input type="text" name="name" value="{{Auth::user()->name}}"> <br>
		Username : <input type="text" name="username" value="{{Auth::user()->username}}"> <br>
		Email : <input type="email" name="email" value="{{Auth::user()->email}}"> <br>
		Password : <input type="password" name="password"> <br>
		<button type="submit">Submit</button>
		{{$error}}<br>
	</form>

	<form action={{route('image-upload')}} method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="file" class="form-control-file" name="avatar" id="avatar" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

	<form action={{route('editpassword')}} method="post">
		{{csrf_field()}}
		Old Password : <input type="password" name="oldpassword"> <br>
		Password : <input type="password" name="newpassword"> <br>
		Confirm Password : <input type="password" name="newpassword2"> <br>
		<button type="submit">Submit</button>
		{{$log}}<br>
	</form>
</body>
</html> --}}