<?php
 $con = mysqli_connect('localhost','root');

 mysqli_select_db($con,'tutor');
 

if(isset($_POST['done'])){
    session_start();
    $id= $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $education = $_POST['education'];
    $phone = $_POST['phone'];
    $salary = $_POST['salary'];
    $address = $_POST['address'];
   // $q = " INSERT INTO `crud`(`username`, `password`) VALUES ( '$username', '$password' )";
   $q = " update tutorlist set id='$id', name='$name',email='$email' , password='$password', education='$education',phone='$phone', salary='$salary', address='$address' where id= '$id'  ";
   // $q="INSERT INTO tutorlist(name,email,password,education,phone,salary,address) VALUES('$name','$email','$password','$education','$phone','$salary','$address')";
   
    $query = mysqli_query($con,$q);
    header("location:tutorlist.php");
   }

?>


<!DOCTYPE html>
<html>
<head>
 <title></title>
   <style>
        body {
        background-color:#99b3e6;
      }
      
      .card{
           text-align: center;  
           
           border:2px double;

      }


   </style>


</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center"> <u> Update tutor </u> </h1>
 </div><br>

 <label> Name: </label>
 <input type="text" name="name" class="form-control"> <br><br>

 <label> Email: </label>
 <input type="text" name="email" class="form-control"> <br><br>

 <label> Password: </label>
 <input type="text" name="password" class="form-control"> <br><br>

 <label> Education: </label>
 <input type="text" name="education" class="form-control"> <br><br>

 <label> Phone No: </label>
 <input type="text" name="phone" class="form-control"> <br><br>

 <label> Salary: </label>
 <input type="text" name="salary" class="form-control"> <br><br>

 <label> Address: </label>
 <input type="text" name="address" class="form-control"> <br><br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>