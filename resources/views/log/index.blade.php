<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ URL::asset('log/css/style.css')}}">

</head>
<body>
<div class="login-form">
    <h1>Vim</h1>
    <form action="{{ URL::asset('log/check')}}" method="post">
        <div class="form-group ">
            <input type="text" class="form-control" placeholder="Username " name="username" id="UserName">
            <i class="fa fa-user"></i>
        </div>
        <div class="form-group log-status">
            <input type="password" class="form-control" placeholder="Password" name="pwd" id="Passwod">
            <i class="fa fa-lock"></i>
        </div>
        <span class="alert">Invalid Credentials</span>
        <a class="link" href="#">Lost your password?</a>
        <input type="submit" class="log-btn"  value="Log in">
    </form>


</div>
<script src="{{URL::asset('log/js/index.js')}}"></script>
</body>
</html>
