<?php
$mail=$_SESSION['email'];
//$mail='naina@gmail.com';
include_once('Class/Admin_Model.php');
$model=new Admin_Model();
$admin_info=$model->readAdmin($mail);
$CurrentPass=$admin_info[0]['password'];


if(isset($_POST['updatePass'])){

        if($CurrentPass==$_POST['oldpass'])
          {
              if($_POST['newpass']==$_POST['conpass'])
                   {
                    $model->updatePassword($mail,$_POST['newpass']);
                   }

              else{
                
              }
          }
        else
         {
          
         }

      }

?>


<!doctype html>
<html lang="en">

  <body>
    <form action="#" method="post" >
        <div class="form-group row">
          <label for="oldpass" class="col-sm-2 col-form-label">Current Password</label>
          <div class="col-sm-6">
           <input type="text" class="form-control" id="oldpass" name="oldpass">
          </div>
        </div>
        <div class="form-group row">
          <label for="newpass" class="col-sm-2 col-form-label">New Password</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="newpass" name="newpass">
          </div>
        </div>
        <div class="form-group row">
          <label for="conpass" class="col-sm-2 col-form-label">Confirm Password</label>
          <div class="col-sm-6">
           <input type="text" class="form-control" id="conpass" name="conpass">
          </div>
        </div>
        <div class="form-group row">
         <div class="col-sm-4"></div>
          <div class="col-sm-2">
             <button type="submit" name="updatePass" class="btn btn-primary">Update</button>
          </div>
          <div class="col-sm-2"></div>
        </div>



    </form>


  </body>
</html>