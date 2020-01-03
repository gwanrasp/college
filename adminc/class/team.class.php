<?php
require_once"database.php";
class Team extends Database{
	public $id,$name,$post,$message,$feature_image;

function create(){
	$sql="insert into tbl_team(name,post,message,feature_image) values('$this->name','$this->post','$this->message','$this->feature_image')";
	$treat = $this->insert($sql);
	if(is_integer($treat)){
		return "<script type='text/javascript'>alert('Member added successfully!')</script>";
	}
	else
		echo"<script type='text/javascript'>alert('Fail to add member!!!')</script>";
}


function edit(){
	$sql= "update tbl_team set name='$this->name', post='$this->post', message='$this->message',feature_image='$this->feature_image' where id='$this->id'";
	$rt= $this->update($sql);
	if($rt){
		header('location:list_team.php');
	}
	else{
		return"<script type='text/javascript'>alert?('Failed to add memeber!!')</script>";
	}

}


function remove(){
	$sql="delete from tbl_team where id='$this->id'";
	$stat = $this->delete($sql);
	if($stat){
		header('location:list_team.php');
	}
	else{
		return "Can't delete the member";
	}

}




function lists()
{
	$sql= "select *from tbl_team order by id = '$this->id'";
	return $this->select($sql);
}



function getTeamByID()
{
	$sql= "select *from tbl_team where id = '$this->id'";
	return $this->select($sql);
}




}
?>