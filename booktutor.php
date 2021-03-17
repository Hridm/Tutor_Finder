<style>
td{
    padding:10px;
}
</style>
<!DOCTYPE html>
<html>
<head>
<title>Book tutor</title>
</head>
<center><body background="pic1.jpg">
<h1> TUTOR LIST</h1>
<?php
$db = mysqli_connect("localhost", "root", "", "tutorfinder");
error_reporting(0);
$query= "SELECT * FROM tutor_info;";
$data=mysqli_query($db,$query);
$total=mysqli_num_rows($data);

if($total !=0)
{
   ?>
   <table border="1">
   <tr>
   <th>ID</th>
   <th>Name</th>
   <th>Email</th>
   <th>Education</th>
   <th>phone</th>
   <th>Address</th>
   <th>Salary</th>
   <th>subject</th>

   <tr>
   
   <?php
   while($result= mysqli_fetch_assoc($data))
   {
       echo"<tr>
            <td>".$result['id']."</td>
            <td>".$result['name']."</td>
            <td>".$result['email']."</td>
            <td>".$result['education']."</td>
            <td>".$result['phone']."</td>
            <td>".$result['address']."</td>
            <td>".$result['salary']."</td>
            <td>".$result['subject']."</td>
            <td><a href='book.php?id=$result[id]&nm=$result[name]&em=$result[email]&sl=$result[salary]&sub=$result[subject]'>Book</a></td>
            </tr>";

       
   }

}
else{

}

?>
</table>

<form action="" method="GET">
<input style="background-color: pink; height: 30px; width: 150px;" type="submit" name="back"value="BACK"/>
<form>
<?php
if($_GET['back'])
{
    header("location: userhome.php");
}
?>
</body><center>
</html>