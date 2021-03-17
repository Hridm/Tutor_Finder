<?php

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'tutor');

$id = $_GET['id'];

$q = " DELETE FROM `tutorlist` WHERE id = $id";

mysqli_query($con, $q);

header('location:tutorlist.php');

?>