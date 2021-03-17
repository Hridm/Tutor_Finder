<?php
$conn= new mysqli("localhost","root","","tutorfinder");

if(isset($_POST['name']) && isset($_POST['institution']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['password'])){
    $name = $_POST['name'];
    $institution = $_POST['institution'];
    $phone =trim($_POST['phone']);
    $email = trim($_POST['email']);
    $address = ($_POST['address']);
    $password =trim($_POST['password']);
    $sql= "SELECT * FROM login_info WHERE email='$email'";
    $verify = mysqli_query($conn, $sql);
    if(mysqli_num_rows($verify) > 0){
        echo json_encode(['status' => 'error', 'message' => 'Sorry! This email is already taken']);
    }else{

        $sql1 = "INSERT INTO login_info(name,email,password,status) VALUES('$name','$email','$password',0)";
        $conn->query($sql1);
        $sql2 = "INSERT INTO user_info(name,email,institution,phone,address) VALUES('$name','$email','$institution','$phone','$address')";
        $conn->query($sql2);
        $_SESSION['created'] = "YOUR ACCOUNT HAS BEEN CREATED SUCCESSFULLY";
        echo json_encode(['status' => 'success']);

    }


    
    


    


}
?>