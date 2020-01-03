<?php
require_once"database.php";
class Subscriber extends Database{
	

	function create(){
		

	}


	function edit(){
		

	}

	function remove(){
		$sql = "delete from tbl_subscribe where id = '$this->id'";
		$status = $this->delete($sql);
		if($status){
			header('location:list_subscribers.php');
		}
		else
		{
			return "Can't delete record";
		}

	}

	function lists(){
		

	}

	

	

	

}
?>