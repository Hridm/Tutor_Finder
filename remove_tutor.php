<?php
include_once 'Class/Tutor_Model.php';
$m=new Tutor_Model();
$tutors=$m->show_all_tutor();




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
                             echo "<td>" . "<a href=\"Class/delete_tutor_ajax.php?q=". $tutors[$i]['id']."\" class=\"btn btn-primary \">Delete</a>". "</td>";
                              echo "</tr>";
                              $j++;
                            }


                          

                          ?>
        </tbody>
      </table>


  </body>
</html>