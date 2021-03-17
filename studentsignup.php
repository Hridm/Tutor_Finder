<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-eqiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="headerstyle.css">

</head>
<body background="bg.jpg">
    <nav>
        <a href="index.html" class="logo">Tutors Finder</a>
        <ul>
            <li><a href="index.html" class="active">HOME</a></li>
            <li><a href="tutorsignup.php" class="active">REGISTER AS TEACHER</a></li>
            <li><a href="login.php" class="si">LOG IN</a></li>

        </ul>

    </nav>
        
<div class="container">
<div class="row">
<div class="col-md-5 mx-auto mt-5">
<div class="card">
<div class="card-header">
<h3>Signup Here<h3>
</div>
<div class="card-body">
<form>
<div class="form-group">
<input type="text" id="name" class="form-control name" placeholder="Name">
<div class="invalid-feedback" style="font-size:16px;"> Name is required</div>
</div>
<div class="form-group">
<input type="text" id="institution" class="form-control institution" placeholder="Institution">
<div class="invalid-feedback" style="font-size:16px;"> Institution information is required</div>
</div>
<div class="form-group">
<input type="number" id="phone" class="form-control phone" placeholder="Phone">
<div class="invalid-feedback" style="font-size:16px;"> Phone number is required</div>
</div>
<div class="form-group">
<input type="text" id="address" class="form-control address" placeholder="Address">
<div class="invalid-feedback" style="font-size:16px;"> Address is required</div>
</div>
<div class="form-group">
<input type="email" id="email" class="form-control email" placeholder="Email">
<div class="invalid-feedback emailError" style="font-size:16px;"> Email is required</div>
</div>
<div class="form-group">
<input type="password" id="password" class="form-control  password" placeholder="Password">
<div class="invalid-feedback" style="font-size:16px;"> password is required</div>
</div>
<div class="form-group">
<button type="button" id="signup" class="btn btn-info">Signup &rarr;</button>
</div>
<div class="form-group">
<h5> Already signed up? <a href="login.php">Login here.</a> </h5>

</div>
</form>
</div>
</div>
</div>
</div>
</div>
 <script src="jquery.min.js"></script>
 <script src="userapp.js"></script>
</body>
</html>