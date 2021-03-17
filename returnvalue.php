<?php
$connection = mysqli_connect("localhost", "root","", "tutor");
$sql = "SELECT * FROM tutorlist";
$result = mysqli_query($connection, $sql);

//Get the data
$identifiers = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo json_encode($identifiers);



?>