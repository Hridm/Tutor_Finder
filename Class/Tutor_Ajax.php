<?php
    require_once('Tutor_Model.php');
	 $db=new Tutor_Model();
	 $sql="Select * from tutor_info where id=".$_GET['q'];
     $profile=$db->tutor_info($sql);
     echo json_encode($profile[0]);
     
     exit();

 ?>
	

