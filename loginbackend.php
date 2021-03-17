<?php
$conn= new mysqli("localhost","root","","tutorfinder");
if(isset($_POST['email']) && isset($_POST['password'])){
    $email=trim($_POST['email']);
    $password=trim($_POST['password']);
    $rem=$_POST['remember'];
    $sql= "SELECT * FROM login_info WHERE email='$email'";
    $sql1="SELECT * FROM login_info WHERE email='$email' AND password='$password'";
    $sql2="SELECT * FROM login_info WHERE email='$email' AND status = 1";
    $sql3="SELECT * FROM login_info WHERE email='$email' AND status = 3";
    $verify = mysqli_query($conn, $sql);
    $verify1= mysqli_query($conn,$sql1);
    $verify3= mysqli_query($conn,$sql2);
    $verify4=mysqli_query($conn,$sql3);
    if(mysqli_num_rows($verify) == 0){
        echo json_encode(['status' => 'emailerror', 'message' => 'Incorrect email!! Please write correct email id.']);
    }
    else if(mysqli_num_rows($verify1) == 0){
        echo json_encode(['status' => 'passerror', 'message' => 'Incorrect password.']);
    }
    else if (mysqli_num_rows($verify1) > 0){
        if($rem ==1 ){
            session_start();
            setcookie('email', $email, time()+60*60*7);
         if(mysqli_num_rows($verify3) == 1){
             
            $_SESSION['email'] = $email;
          echo json_encode(['status' => 'tutorsuccess']);
         }else if(mysqli_num_rows($verify4) == 1){
            $_SESSION['email'] = $email;
            echo json_encode(['status' => 'adminsuccess']);
         }
         else
         {
            $_SESSION['email'] = $email;
            echo json_encode(['status' => 'usersuccess']);
         }
        }else{
            session_start();
            if(mysqli_num_rows($verify3) == 1){
                $_SESSION['email'] = $email;
              echo json_encode(['status' => 'tutorsuccess']);
             }else if(mysqli_num_rows($verify4) == 1){
                $_SESSION['email'] = $email;
                echo json_encode(['status' => 'adminsuccess']);
             }
             else
             {
                $_SESSION['email'] = $email;
                echo json_encode(['status' => 'usersuccess']);
             }

        }
    }





}




?>