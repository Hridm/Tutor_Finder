<?php
$email=$_SESSION['email'];
//$email='naina@gmail.com';


include_once('Class/Admin_Model.php');
$model=new Admin_Model();
$admin_info=$model->readAdmin($email);
if(isset($_POST['updateAdmin'])){
          $data = array(
            'name'    => $_POST['adminname'], 
            'email'  =>$_POST['adminemail']
             );
          foreach ($data as $key => $value) {
              $sql = "UPDATE `login_info` SET `$key`='$value' WHERE email='$email'";

              $m->tutor_update($sql);
          }
$admin_info=$model->readAdmin($email);
}


?>




<!doctype html>
<html lang="en">

  <body>
    <form method="post" action="#">
        <div class="form-group row">
          <label for="adminname" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-6">
            <input type="text" readonly class="form-control-plaintext" id="adminname" name="adminname" value=
            "<?php echo $admin_info[0]['name']?>" onclick="changemode()">
          </div>
        </div>
        <div class="form-group row">
          <label for="adminemail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-6">
            <input type="email" readonly class="form-control-plaintext" id="adminemail" name="adminemail" value="<?php echo $admin_info[0]['email']?>" onclick="changemode()">
          </div>
        </div>
        <!--div class="form-group row">
          <label for="adminphone" class="col-sm-2 col-form-label">Phone</label>
          <div class="col-sm-6">
            <input type="text" readonly class="form-control-plaintext" id="adminphone" name="adminphone" value="<?php// echo $admin_info[0]['mobile']?>" onclick="changemode()">
          </div>
        </div-->
        <div class="form-group row">
         <div class="col-sm-2"></div>
          <div class="col-sm-2">
             <button type="submit" name="updateAdmin" class="btn btn-primary">Update</button>
          </div>
          <div class="col-sm-4"></div>
        </div>



    </form>

  </body>
</html>