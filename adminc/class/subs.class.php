<?php
require_once"database.php";
class Subscriber extends Database{
	public $id,$email;


	function create(){
		    $sql = "insert into tbl_subscribe(email,created_date) values ('$this->email','$this->created_date')";
		
		$it = $this->insert($sql);
		if(is_integer($it)) {
			
			return "<script type='text/javascript'>alert('Successfull!')</script>";
					}
		else{
			echo"<script type='text/javascript'>alert('Failed!!')</script>";
		}


	}


	function edit(){
		

	}

	function remove(){
		
	}

	function lists(){
		$sql = "select *from tbl_subscribe order by created_date";

		return $this->select($sql);

	}


	


}
?>