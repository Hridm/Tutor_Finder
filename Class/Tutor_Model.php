<?php
include_once('DBController.php');
class Tutor_Model extends DBController{


   public function show_all_tutor(){
   	return parent::read("select * from tutor_info");
        }

    public function tutor_info($sql){
    	return parent::read($sql);

    }
    public function tutor_update($sql){
    	return parent::update($sql);
    }
    public function delete_tutor($sql){
    	return parent::delete($sql);
    }


}


?>