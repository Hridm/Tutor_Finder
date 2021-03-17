<?php

$db = mysqli_connect("localhost", "root", "", "tutorfinder");
if(isset($_POST['update_button'])) {
    session_start();
    $email=$_SESSION['email'];
    $currentpassword=$_POST['currentpassword'];
    $newpassword1=$_POST['newpassword1'];
    $newpassword2=$_POST['newpassword2'];
    $sql="SELECT * FROM login_info WHERE email='$email' AND password='$currentpassword';";
    $verify=mysqli_query($db, $sql);
    if(mysqli_num_rows($verify) == 0)
    {
        echo "current password is incorrect";

    }
    else if($newpassword1 != $newpassword2){
        echo "new passwords are unmatched";
    }else{
        $sql1 = "UPDATE login_info SET password='$newpassword1' WHERE email='$email'";
        mysqli_query($db, $sql1);
        echo" password is changed";
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change password</title>
    <link rel="stylesheet" type="text/css" href="updatestyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <center>
        <h1>Change Password</h1>
        <form method="post" action="changepass.php"><br/>

            <input type="password" name="currentpassword" id="currentpassword" placeholder="Enter your current password here">
            <i class="fa fa-university" aria-hidden="true"></i><br/>

            <input type="password" name="newpassword1" id="newpassword1" placeholder="Enter new password">
            <i class="fa fa-phone-square" aria-hidden="true"></i><br/>

            <input type="password" name="newpassword2" id="newpassword2" placeholder="Re enter new password">
            <i class="fa fa-location-arrow" aria-hidden="true"></i><br/>

            <tr>
            <td><input type="submit" name="update_button" value="Change password" ></td>

             </tr>

            
        </form>

<center>
</body>
</html>