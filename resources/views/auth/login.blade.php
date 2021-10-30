
<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('login/fonts/icomoon/style.css')}}">
<link rel="stylesheet" href="{{asset('login/css/owl.carousel.min.css')}}">


<link rel="stylesheet" href="{{asset('login/css/bootstrap.min.css')}}">




<link rel="stylesheet" href="{{asset('login/css/style.css')}}">
<title>Login</title>
</head>
<body>
<div class="mt-3 ml-3">
    <a href="{{route('dashboard')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
        </svg>
    </a>
</div>
<div class="content">

<div class="container">

<div class="row">
<div class="col-md-6">
<img src="{{asset('login/images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
</div>
<div class="col-md-6 contents">
<div class="row justify-content-center">
    <img src="{{asset('assets/img/logo/smkutama.png')}}" width="100px">
</div>
<br>
<div class="row justify-content-center">
<div class="col-md-8">
<div class="mb-4">
<h3 align="center">Sign In</h3>

</div>
<form action="{{route('postlogin')}}" method="post">
@csrf
<div class="form-group first">
<label for="username" style="color:black;">username</label>
<input type="text" class="form-control" id="username" name="username" autocomplete="off">
</div>
<div class="form-group last mb-4">
<label for="password" style="color:black;">Password</label>
<input type="password" class="form-control" id="password" name="password">
</div>
<input type="submit" value="Log In" class="btn btn-block btn-primary">
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="{{asset('login/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('login/js/popper.min.js')}}"></script>
<script src="{{asset('login/js/bootstrap.min.js')}}"></script>
<script src="{{asset('login/js/main.js')}}"></script>
</body>
</html>