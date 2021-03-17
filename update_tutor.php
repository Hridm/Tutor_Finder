
<?php
include_once 'Class/Tutor_Model.php';
$m=new Tutor_Model();
$tutors=$m->show_all_tutor();
if(isset($_POST['submittutorbtn'])){
  /*
  cookie is set for tracking which tutors profile is updated
  */
      /*$cookie_id = $_POST['upid'];
      $cookie_name = $_POST['upName'];
       setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); */
          $id=$_POST['upid'];
          $data = array(
            'name'    => $_POST['upName'], 
            'phone' => $_POST['upmobile'], 
            'subject'   => $_POST['upsubject'],
            'day'   => $_POST['upday'],
            'language'   => $_POST['uplang'],
            'email'  =>$_POST['upemail']
             );
          foreach ($data as $key => $value) {
              $sql = "UPDATE `tutor_info` SET `$key` = '$value' WHERE `tutor_info`.`id` = ".$id;
              $m->tutor_update($sql);
          }
$tutors=$m->show_all_tutor();
}

?>




<!doctype html>
<html lang="en">

  <body>
  <table class="table table-hover col-sm-10">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Subjects</th>
      <th scope="col">Days in Week</th>
      <th scope="col">Language</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

      
                          <?php

                            $j=1;
                            foreach ($tutors as $i => $value) {
                              echo "<tr>";
                              echo  "<th scope=\"row\">".$j."</th>";
                              echo "<td>" . $tutors[$i]['name'] . "</td>";
                              echo "<td>" . $tutors[$i]['email'] . "</td>";
                              echo "<td>" . $tutors[$i]['phone'] . "</td>";
                             echo "<td>" . $tutors[$i]['subject']. "</td>";
                             echo "<td>" . $tutors[$i]['day']. "</td>";
                             echo "<td>" . $tutors[$i]['language']. "</td>";
                             echo "<td>" . "<a href=\"#jump\" class=\"btn btn-primary \" onclick=\"loadtutor(".$tutors[$i]['id'].");\">Edit</a>". "</td>";

                          
                              echo "</tr>";
                              $j++;
                            }


                          

                          ?>
  </tbody>
</table>

<hr>

    <form id="jump"  action="#" method="post" >
      <div class="form-group row">
        <label for="updateName" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="updateName" name="upName">
          <input type="text" class="form-control" id="updateid" name="upid" hidden >
        </div>
      </div>
      <div class="form-group row">
        <label for="updateemail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-4">
          <input type="email" class="form-control" id="updateemail" name="upemail">
        </div>
      </div>

        <div class="form-group row">
        <label for="updatemobile" class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="updatemobile" name="upmobile">
        </div>
      </div>
      <div class="form-group row">
        <label for="subject" class="col-sm-2 col-form-label">Subjects</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="updatesubject" name="upsubject">
        </div>
      </div>
      <div class="form-group row">
        <label for="day" class="col-sm-2 col-form-label">Avaialble Days</label>
        <div class="col-sm-4">
          <input type="number" class="form-control" id="updateday" name="upday" min="1" max="7">
        </div>
      </div>
      <div class="form-group row">
              <label for="lang" class="col-sm-2 col-form-label">Language</label>
              <div class="col-sm-4">
                <div class="input-group mb-3">
                  <select class="custom-select" id="lang" name="uplang">
                    <option selected disabled value="1">Choose...</option>
                    <option value="Bangla">Bangla</option>
                    <option value="English">English</option>
                    <option value="Bangla & English">Bangla &amp English</option>
                  </select>
                  <div class="input-group-append">
                    <label class="input-group-text" for="lang">Options</label>
                  </div>
                </div>
               </div>
         </div>

            

      <div class="form-group row">
        <div class="col-sm-2"></div>
        <div class="col-sm-3">
          <button type="submit" name="submittutorbtn" class="btn btn-primary">Update</button>
         <button type="reset" class="btn btn-warning">Reset</button>
        </div>
        <div class="col-sm-1">
           
        </div>
      </div>
    </form>



  </body>
</html>