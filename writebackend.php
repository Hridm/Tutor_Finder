<?php
$conn= new mysqli("localhost","root","","tutorfinder");
if(isset($_POST['email']) && isset($_POST['message'])){

    $email = $_POST['email'];
    $message = $_POST['message'];

    $query="INSERT INTO opinions(email,opinion) VALUES('$email','$message')";
    mysqli_query($conn, $query);
    echo json_encode("Message sent");

}
?>