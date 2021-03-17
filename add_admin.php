<?php
include_once ('Class/Admin_Model.php');
$model=new Admin_Model();
$error=$e="";


if (isset($_POST['register'])) {
	if($_POST['pass1']==$_POST['pass2'])
	{
		    $data = array(
            'name'    => $_POST['Name'], 
            'email'  =>$_POST['email'], 
            'password'   => $_POST['pass1'],
            'status' =>3
             );
        $model->addAdmin('login_info',$data);

       }
    }

?>

<!doctype html>
<html lang="en">
  <body>
  	
	  
	
    <form action="#" method="post" >
		  <div class="form-group row">
		    <label for="Name" class="col-sm-2 col-form-label">Name</label>
		    <div class="col-sm-6">
		      <input type="text" class="form-control" id="Name" name="Name">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="email" class="col-sm-2 col-form-label">Email</label>
		    <div class="col-sm-6">
		      <input type="email" class="form-control" id="email" name="email">
		    </div>
		  </div>

		  	<!--div class="form-group row">
		    <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
		    <div class="col-sm-6">
		      <input type="text" class="form-control" id="mobile" name="mobile">
		    </div>
		  </div-->
		  <div class="form-group row">
		    <label for="pass1" class="col-sm-2 col-form-label">Password</label>
		    <div class="col-sm-6">
		      <input type="password" class="form-control" id="pass1" name="pass1">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="pass2" class="col-sm-2 col-form-label">Confirm Password</label>
		    <div class="col-sm-6">
		      <input type="password" class="form-control" id="pass2" name="pass2">
		    </div>
		  </div>
		  <div class="form-group row">
		  			  	<div class="col-sm-4"></div>
		    <div class="col-sm-4">
		      <div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="showpass()">
			    <label class="form-check-label" for="exampleCheck1">Show Password</label>
		      </div>
		    </div>
		    <div class="col-sm-4"></div>

		  </div>

		  <div class="form-group row">
		  	<div class="col-sm-4"></div>
		    <div class="col-sm-4">
		      <button type="submit" name="register" class="btn btn-primary">Register</button>
		      <button type="reset" class="btn btn-warning">Reset</button>
		    </div>
		    <div class="col-sm-4"></div>
		  </div>
		</form>
  </body>
</html>