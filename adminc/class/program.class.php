<?php
require_once"database.php";
class Program extends Database{
	public $id,$course_name,$academic_requirement,$description,$syllables,$credit_hours;


	function create(){
		    $sql = "insert into tbl_program(course_name,academic_requirement,description,syllables,credit_hours) values ('$this->course_name','$this->academic_requirement','$this->description','$this->syllables','$this->credit_hours')";
		
		$it = $this->insert($sql);
		if(is_integer($it)) {
			
			return "<script type='text/javascript'>alert('Program saved successfully!')</script>";
					}
		else{
			echo"<script type='text/javascript'>alert('Failed to add program!!')</script>";
		}


	}


	function edit(){
		$sql = "update tbl_program set course_name='$this->course_name',academic_requirement='$this->academic_requirement',description='$this->description',syllables='$this->syllables',credit_hours='$this->credit_hours' where id = '$this->id'";
		$statt = $this->update($sql);
		
		if($statt){
			header('location:list_program.php');
		}
		else{
			return"<script type='text/javascript'>alert('Failed to Update Program!')</script>";
		}


	}

	function remove(){
		$sql = "delete from tbl_program where id = '$this->id'";
		$status = $this->delete($sql);
		if($status){
			header('location:list_program.php');
		}
		else
		{
			return "Can't delete record";
		}

	}

	function lists(){
		$sql = "select *from tbl_program order by id='$this->id'";

		return $this->select($sql);

	}

	function getProgramByID(){
		$sql = "select *from tbl_program where id='$this->id'";

		return $this->select($sql);

	}


	

}
?>