<?php
$db = mysqli_connect("localhost", "root", "", "tutorfinder");
error_reporting(0);
session_start();
    $useremail=$_SESSION['email'];
    $id=$_GET['id'];
    $tutor_email=$_GET['em'];
    $salary=$_GET['sl'];
    $sub=$_GET['sub'];
    $sql="INSERT INTO book(user_email,tutor_email,subject,salary) VALUES('$useremail','$tutor_email','$sub','$salary')";
   $query= mysqli_query($db, $sql);
   if($query){
       echo "<h1>successfully booked</h1>";
   }
   else{
       echo "<h1>booking failed</h1>";
   }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>
<body background="pic12.jpg">
<form action="" method="GET">
<input style="background-color: pink; height: 30px; width: 150px;" type="submit" name="back"value="BACK"/>
</form>
<?php
if($_GET['back'])
{
    header("location: userhome.php");
}
?>
    
</body>
</html>
