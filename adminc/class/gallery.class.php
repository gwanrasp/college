<?php
require_once"database.php";
class Gallery extends Database{
	public $id,$feature_image,$title,$feature_key,$description;

function create(){
	$sql="insert into tbl_gallery(feature_image,title,feature_key,description) values('$this->feature_image','$this->title','$this->feature_key','$this->description')";
	$git = $this->insert($sql);
	if(is_integer($git)){
		return "<script type='text/javascript'>alert('Image added successfully!')</script>";
	}
	else
		echo"<script type='text/javascript'>alert('Fail to add photo!!!')</script>";
}


function edit(){
	$sql= "update tbl_gallery set feature_image='$this->feature_image',title='$this->title',feature_key='$this->feature_key',description='$this->description' where id='$this->id'";
	$restat= $this->update($sql);
	if($restat){
		header('location:list_gallery.php');
	}
	else{
		return"<script type='text/javascript'>alert?('Failed to add photo!!')</script>";
	}

}


function remove(){
	$sql="delete from tbl_gallery where id='$this->id'";
	$stat = $this->delete($sql);
	if($stat){
		header('location:list_gallery.php');
	}
	else{
		return "Can't delete the photo";
	}

}




function lists()
{
	$sql= "select *from tbl_gallery order by title";
	return $this->select($sql);
}



function getPhotoByID()
{
	$sql= "select *from tbl_gallery where id = '$this->id'";
	return $this->select($sql);
}


function getFeaturedPhoto()
{
	$sql= "select *from tbl_gallery where feature_key =1 order by id = '$this->id'";
	return $this->select($sql);
}




}
?>