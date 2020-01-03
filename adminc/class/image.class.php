<?php
require_once"database.php";
class Image extends Database{
	public $id,$feature_image,$title,$feature_key;

function create(){
	$sql="insert into tbl_image(feature_image,title,feature_key) values('$this->feature_image','$this->title','$this->feature_key')";
	$git = $this->insert($sql);
	if(is_integer($git)){
		return "<script type='text/javascript'>alert('Image added successfully!')</script>";
	}
	else
		echo"<script type='text/javascript'>alert('Fail to add photo!!!')</script>";
}


function edit(){
	$sql= "update tbl_image set feature_image='$this->feature_image',title='$this->title',feature_key='$this->feature_key' where id='$this->id'";
	$restat= $this->update($sql);
	if($restat){
		header('location:list_image.php');
	}
	else{
		return"<script type='text/javascript'>alert?('Failed to add photo!!')</script>";
	}

}


function remove(){
	$sql="delete from tbl_image where id='$this->id'";
	$stat = $this->delete($sql);
	if($stat){
		header('location:list_image.php');
	}
	else{
		return "Can't delete the photo";
	}

}




function lists()
{
	$sql= "select *from tbl_image order by id = '$this->id'";
	return $this->select($sql);
}



function getPhotoByID()
{
	$sql= "select *from tbl_image where id = '$this->id'";
	return $this->select($sql);
}

function getFeatureImage(){
		$sql = "select *from tbl_image where feature_key=1 order by id='$this->id'";
		return $this->select($sql);

	}




}
?>