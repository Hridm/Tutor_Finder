<?php
$db = mysqli_connect("localhost", "root", "", "tutorfinder");
session_start();
$_SESSION['email']="abcd@gmail.com";
?>


<!doctype html>
<html>
    <head>
        <title>User's Home Page</title>
        <link rel="stylesheet" type="text/css" href="homestyle.css">
        
    </head>
    <body style="background-color: aquamarine;"></body>
    <body>
    <header id="top-header">
		
		<div class="container">
		<h1>Welcome to Our Website!!</h1>
		</div>
	   </header>
       
       <div class="button">
           <a href="booktutor.php" class="btn">Book My Tutor</a>
           <a href="changepass.php" class="btn">Change Password</a>
           <a href="updateuser.php" class="btn">Update Profile</a>
           <a href="login.php" class="btn">Logout</a>
       </div>

    </body>
</html>




