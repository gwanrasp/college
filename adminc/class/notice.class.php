<?php
require_once"database.php";
class Notice extends Database{
	public $id,$title,$short_description,$description,$feature_image,$feature_key,$status,$created_by,$modified_by,$created_date,$modified_date;


	function create(){
		    $sql = "insert into tbl_notice(title,short_description,description,feature_image,feature_key,status,created_by,created_date) values ('$this->title','$this->short_description','$this->description','$this->feature_image','$this->feature_key','$this->status','$this->created_by','$this->created_date')";
		
		$it = $this->insert($sql);
		if(is_integer($it)) {
			
			return "<script type='text/javascript'>alert('Notice saved successfully!')</script>";
					}
		else{
			echo"<script type='text/javascript'>alert('Failed to create Notice!!')</script>";
		}


	}


	function edit(){
		$sql = "update tbl_notice set title='$this->title',short_description='$this->short_description',description='$this->description',feature_image='$this->feature_image',feature_key='$this->feature_key',status='$this->status',modified_by='$this->modified_by',modified_date='$this->modified_date' where id = '$this->id'";
		$statt = $this->update($sql);
		
		if($statt){
			header('location:list_notice.php');
		}
		else{
			return"<script type='text/javascript'>alert('Failed to Update Notice!')</script>";
		}


	}

	function remove(){
		$sql = "delete from tbl_notice where id = '$this->id'";
		$status = $this->delete($sql);
		if($status){
			header('location:list_notice.php');
		}
		else
		{
			return "Can't delete record";
		}

	}

	function lists(){
		$sql = "select *from tbl_notice order by title";

		return $this->select($sql);

	}


	function getNoticeByID(){
		$sql = "select *from tbl_notice where id='$this->id'";

		return $this->select($sql);
	}



}
?>