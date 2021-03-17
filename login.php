
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-eqiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="headerstyle.css">
   

</head>
<body background="bg.jpg">
<nav>
        <a href="index.html" class="logo">Tutors Finder</a>
        <ul>
            <li><a href="index.html" class="active">HOME</a></li>
            <li><a href="studentsignup.php" class="active">REGISTER AS STUDENT</a></li>
            <li><a href="tutorsignup.php" class="active">REGISTER AS TEACHER</a></li>

        </ul>

    </nav>
<div class="container">
<div class="row">
<div class="col-md-5 mx-auto mt-5">
<div class="card">
<div class="card-header">
<h3>Login Here<h3>
</div>
<div class="card-body">
<form>
<div class="form-group">
<input type="email" id="email" class="form-control email" placeholder="Email">
<div class="invalid-feedback emailError" style="font-size:16px;"> Email is required</div>
</div>
<div class="form-group">
<input type="password" id="password" class="form-control password" placeholder="Password">
<div class="invalid-feedback passError" style="font-size:16px;"> password is required</div>
</div>
<div class="form-group">
<button type="button" id="login" class="btn btn-info">Login &rarr;</button>
</div>
<div class="form-group">
<input type="checkbox" id="remember" name="remember" value="1"> Remember Me
</div>
<div class="form-group">
<h5>Forget password? <a href="recoverpass.php">Click here</a></h5>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

 
<script src="jquery.min.js"></script>
<script src="loginapp.js"></script>
</body>
</html>