<?php
require_once"database.php";
class Applicant extends Database{
	public $id,$f_name,$gender,$dob,$p_address,$contact_no,$email,$father_name,$occupation,$mother_name,$last_exampass,$pass_year,$nos_c,$percentage,$applied_date;

function create(){
	 $sql = "insert into tbl_applicant(f_name,gender,dob,p_address,contact_no,email,father_name,occupation,mother_name,last_exampass,pass_year,nos_c,percentage,applied_date) values ('$this->f_name','$this->gender','$this->dob','$this->p_address','$this->contact_no','$this->email','$this->father_name','$this->occupation','$this->mother_name','$this->last_exampass','$this->pass_year','$this->nos_c','$this->percentage','$this->applied_date')";
	 
		
		$it = $this->insert($sql);
		if(is_integer($it)) {
			
			return "<script type='text/javascript'>alert('Application created successfully!')</script>";
					}
		else{
			echo"<script type='text/javascript'>alert('Failed to create Application!')</script>";
		}


}


function edit(){

	
}


function remove(){
	

}




function lists()
{
	$sql= "select *from tbl_applicant order by applied_date";
	return $this->select($sql);
}



function getApplicantByID()
{
	$sql= "select *from tbl_applicant where id = '$this->id'";
	return $this->select($sql);
}




}
?>