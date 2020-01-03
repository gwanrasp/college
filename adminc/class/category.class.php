<?php
require_once"database.php";
class Category extends Database{
	public $id,$name,$rank,$status,$created_by,$modified_by,$created_date,$modified_date;


	function create(){
		 $sql = "insert into tbl_category (name,rank,status,created_by,created_date) values ('$this->name','$this->rank','$this->status','$this->created_by','$this->created_date')";
		 
		$it = $this->insert($sql);
		
		if(is_integer($it)) {
			
			return "<script type='text/javascript'>alert('Category saved successfully!')</script>";
					}
		else{
			echo"<script type='text/javascript'>alert('Failed to insert Category!')</script>";
		}


	}


	function edit(){
		$sql = "update tbl_category set name='$this->name',rank='$this->rank',status='$this->status',modified_by='$this->modified_by',modified_date='$this->modified_date' where id ='$this->id'";
		
		$stat = $this->update($sql);

		if($stat){
			header('location:list_category.php');
			

		}
		else{
			echo "<script type='text/javascript'>alert('Failed to Update Category!')</script>";
		}

	}

	function remove(){
		$sql = "delete from tbl_category where id = '$this->id'";
		$status = $this->delete($sql);
		if($status){
			header('location:list_category.php');
		}
		else
		{
			return "Can't delete record";
		}

	}

	function lists(){
		$sql = "select *from tbl_category order by rank";
		return $this->select($sql);

	}

	function getCategoryByID(){
		$sql = "select *from tbl_category where id='$this->id'";
		return $this->select($sql);

	}


	function getActiveCategory(){
		$sql = "select *from tbl_category where status=1 order by rank";
		return $this->select($sql);

	}

	

}
?>