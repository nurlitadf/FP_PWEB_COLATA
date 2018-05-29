<!DOCTYPE html>

<html>

<head>

    <title>Laravel 5.5 image upload example</title>

    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css">

</head>

<body>

<div class="container">

    <div class="panel panel-primary">

      <div class="panel-heading"><h2>Laravel 5.5 image upload example</h2></div>

      <div class="panel-body">




        <form action={{route('image-upload')}} method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="file" class="form-control-file" name="avatar" id="avatar" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>



      </div>

    </div>

</div>

</body>

</html>