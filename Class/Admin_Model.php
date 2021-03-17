<?php
include_once('DBController.php');
class Admin_Model extends DBController{

		public function addAdmin($tableName,$data)
		{
        return parent::insert($tableName,$data);
        }

        public function readAdmin($mail){
        	$sql = "SELECT * FROM `login_info` WHERE email="."'$mail'";
        	return parent::read($sql);

        }
        public function updatePassword($mail,$pass){
            $sql = "UPDATE `login_info` SET `password`="."'$pass' WHERE email= '$mail'";
        	return parent::update($sql);
        }
        public function updateAdmin($sql){
            return parent::update();
        }


}


?>