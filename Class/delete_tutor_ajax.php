<?php
    require_once('Tutor_Model.php');
	 $db=new Tutor_Model();
	 $sql="DELETE FROM `tutor_info` WHERE id=".$_GET['q'];
	 if ($db->delete_tutor($sql)) {
         header('Location: ../adminhome.php');

      }


 ?>
	

