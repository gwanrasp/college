<?php

require_once "database.php";
class User extends Database{
	public $id,$name,$username,$email,$password,$role,$last_login;

	

	function login(){
		 $sql = "select * from tbl_user where email='$this->email' and password='$this->password'";
		 $ldata = $this->select($sql);

		 if(count($ldata)==1){
		 	session_start();
		 	$_SESSION['admin_name'] = $ldata[0]->name;
		 	$_SESSION['admin_username'] = $ldata[0]->username;
		 	$_SESSION['admin_email']= $ldata[0]->email;
		 	$_SESSION['admin_role'] = $ldata[0]->role;
		 	

		 	
		 	header('location:dashboard.php');
		 }
		 else{
		 	return "Login Failed";
		 }
	}

	function create(){
		 $sql = "insert into tbl_user (name,username,password,email,last_login,role) values ('$this->name','$this->username',md5('$this->password'),'$this->email','$this->last_login','$this->role')";
		$it = $this->insert($sql);
		
		if(is_integer($it)) {
			
			return "Successfully Created Your Account";
					}
		else{
			echo"Failed to create an account";
		}


	}


	function edit(){

	}

	function remove(){

	}

	function lists(){
		$sql = "select *from tbl_user order by id='$this->id'";
		return $this->select($sql);

	}
}
?>
