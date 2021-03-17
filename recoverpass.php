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
            <li><a href="login.php" class="si">LOG IN</a></li>

        </ul>

    </nav>
<div class="container">
<div class="row">
<div class="col-md-5 mx-auto mt-5">
<div class="card">
<div class="card-header">
<h3>Recover password:<h3>
</div>
<div class="card-body">
<form>
<div class="form-group">
<input type="text" id="name" class="form-control name" placeholder="Name">
<div class="invalid-feedback" style="font-size:16px;"> Name is required</div>
</div>
<div class="form-group">
<input type="email" id="email" class="form-control email" placeholder="Email">
<div class="invalid-feedback emailError" style="font-size:16px;"> Email is required</div>
</div>
<div class="form-group">
<button type="button" id="recover" class="btn btn-info">Recover password &rarr;</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
 
<script src="jquery.min.js"></script>
<script src="recoverapp.js"></script>
</body>
</html>