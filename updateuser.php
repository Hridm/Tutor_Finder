<?php

$db = mysqli_connect("localhost", "root", "", "tutorfinder");
if(isset($_POST['update_button'])) {
    session_start();
    $email=$_SESSION['email'];
    $name = $_POST['name'];
    $institution = $_POST['institution'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    if($name !=""){
    $sql = "UPDATE user_info SET name='$name' WHERE email='$email'";
    mysqli_query($db, $sql);
    $sql1 = "UPDATE login_info SET name='$name' WHERE email='$email'";
    mysqli_query($db, $sql1);
    }
    if($institution !=""){
        $sql = "UPDATE user_info SET institution='$institution' WHERE email='$email'";
        mysqli_query($db, $sql);

    }
    if($phone !=""){
        $sql = "UPDATE user_info SET phone='$phone' WHERE email='$email'";
        mysqli_query($db, $sql);

    }
    if($address !=""){
        $sql = "UPDATE user_info SET address='$address' WHERE email='$email'";
        mysqli_query($db, $sql);

    }
    // mysqli_query($db, $sql);
    header("location: userhome.php");
}
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" type="text/css" href="updatestyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <center>
        <h1>Update My Profile</h1>
        <form method="post" action="updateuser.php"><br/>
            <!-- <input type="text" name="id" placeholder="Enter your ID"/>
            <i class="fa fa-id-card-o" aria-hidden="true"></i><br/> -->

            <input type="text" name="name" placeholder="Enter your Name"/>
            <i class="fa fa-pencil-square" aria-hidden="true"></i><br/>

            <!-- <input type="email" name="email" placeholder="Enter your Email"/>
            <i class="fa fa-envelope" aria-hidden="true"></i><br/> -->

            <input type="text" name="institution" placeholder="Enter your Institution Name"/>
            <i class="fa fa-university" aria-hidden="true"></i><br/>

            <input type="text" name="phone" placeholder="Enter your Phone no"/>
            <i class="fa fa-phone-square" aria-hidden="true"></i><br/>

            <input type="text" name="address" placeholder="Enter your Address"/>
            <i class="fa fa-location-arrow" aria-hidden="true"></i><br/>

            <tr>
                    <td><input type="submit" name="update_button" value="Update Data" required></td>
             </tr>

            
        </form>

<center>
</body>
</html>