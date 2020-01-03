<?php
require_once"database.php";
class Contact extends Database{
	public $id,$f_name,$l_name,$email,$subject,$message,$submit_date;


	function create(){
		    $sql = "insert into tbl_contact(f_name,l_name,email,subject,message,submit_date) values ('$this->f_name','$this->l_name','$this->email','$this->subject','$this->message','$this->submit_date')";
		 $sql;
		$it = $this->insert($sql);
		if(is_integer($it)) {
			
			return "<script type='text/javascript'>alert('Successfull!')</script>";
					}
		else{
			echo"<script type='text/javascript'>alert('Failed to send Notice!!')</script>";
		}


	}


	function edit(){
		

	}

	function remove(){
		$sql = "delete from tbl_contact where id = '$this->id'";
		$status = $this->delete($sql);
		if($status){
			header('location:list_contacts.php');
		}
		else
		{
			return "Can't delete record";
		}
	}

	function lists(){
		$sql = "select *from tbl_contact order by submit_date";

		return $this->select($sql);

	}


	function getContactByID(){
		$sql = "select *from tbl_contact where id='$this->id'";

		return $this->select($sql);
	}



}
?>