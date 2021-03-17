<?php
$conn= new mysqli("localhost","root","","tutorfinder");
if(isset($_POST['email']) && isset($_POST['name'])){
    $email=trim($_POST['email']);
    $name=trim($_POST['name']);
    $sql="SELECT * FROM login_info WHERE name='$name' AND email='$email'";
    $verify = mysqli_query($conn, $sql);
    if(mysqli_num_rows($verify) == 0){
        echo json_encode(['status' => 'error']);
    }else{
        while($row=mysqli_fetch_assoc($verify)){
            $password=$row['password'];
        }
        echo json_encode("your password is " . $password);
    }





}

?>