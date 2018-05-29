@extends('layouts.master')

@section('content')
    @include('layouts.nav')
    
    <div class="container" style="margin-top: 100px;">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">  <h4 >My Profile</h4></div>
                    <div class="panel-body">
                   		<div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                   			<i class="edit outline large icon" data-toggle="modal" data-target="#editfotoprofilmodal" style="    float: left;"></i>
                       		<img alt="User Pic" src="/storage/img/{{ Auth::user()->avatar }}" id="profile-image1" class="img-circle img-responsive"> 
                    	</div>

					    <i class="edit outline large icon" data-toggle="modal" data-target="#editprofilmodal"></i>
                      	
                      	<div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                        	<div class="container" >
                            	<h3>{{Auth::user()->name}}</h3>
                            	<h5>{{Auth::user()->username}}</h5>
                          	</div>
                           	<hr>
                          	<div class="container details">
                            	<p>
                            		<span class="glyphicon glyphicon-envelope one" style="padding-right: 10px;"></span>
                            		{{Auth::user()->email}}
                            	</p>
                          	</div>
                          	<hr>
                          	<div class="col-sm-5 col-xs-6 tital" id="date-join-replace">
                          		<p id="date-join" style="display: none;">{{Auth::user()->created_at}}</p>
                          	</div>
                      	</div>

                    </div>
                </div>
            </div>
    </div>

    <div class="modal fade" id="editprofilmodal" tabindex="-1" role="dialog" aria-labelledby="editprofillabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			    <form action="{{route('updateprofile')}}" method="POST">
				{{csrf_field()}}
			         <div class="modal-header" style="flex-direction: row;">
			            <h5 class="modal-title">Edit Profile</h5>
			            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			            </button>
			                    	
			        </div>
			        <div class="modal-body">
			            <h4>Name</h4>
			            <input type="text" class="form-control form-control-sm" name="name" value="{{Auth::user()->name}}" placeholder="Edit your Full Name">

			            <h4>Username</h4>
			            <input type="text" class="form-control form-control-sm" name="username" value="{{Auth::user()->username}}" placeholder="Edit your Username">
			            
			            <h4>Email</h4>
			            <input type="email" class="form-control form-control-sm" name="email" value="{{Auth::user()->email}}" placeholder="Edit your Email">

			            <input type="password" class="form-control form-control-sm" name="password" placeholder="Type Your Current Password" style="margin-top: 25px; width: 50%;">

			        </div>
			        <div class="modal-footer">
			            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			            <button class="btn btn-primary" type="submit" name="submit">Save</button>
			        </div>
			    </form>
			</div>
		</div>
	</div>

	<div class="modal fade" id="editfotoprofilmodal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			    <form action="{{route('image-upload')}}" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}
			         <div class="modal-header" style="flex-direction: row;">
			            <h5 class="modal-title">Edit Profile</h5>
			            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			            </button>
			        </div>
			        <div class="modal-body">
			            <div class="form-group">
		                    <input type="file" class="form-control-file" name="avatar" id="avatar" aria-describedby="fileHelp">
		                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
		                </div>
			        </div>
			        <div class="modal-footer">
			            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			            <button class="btn btn-primary" type="submit" name="submit">Save</button>
			        </div>
			    </form>
			</div>
		</div>
	</div>

    <script type="text/javascript">
		var t = document.getElementById("date-join").innerHTML;
		var d = new Date(t);
		var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
		document.getElementById("date-join-replace").innerHTML = 
			'Date of Joining: '+
			d.getDate()+' '+
			months[d.getMonth()]+' '+
			d.getFullYear();
	</script>
@endsection


{{-- <!DOCTYPE html>
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

	<div class="profile-header-container">
        <div class="profile-header-img">
            <img class="rounded-circle" src="/storage/img/{{ Auth::user()->avatar }}" />
            <!-- badge -->
            <div class="rank-label-container">
                <span class="label label-default rank-label">{{ Auth::user()->username }}</span>
            </div>
        </div>
   	</div>

</body> 
</html> --}}