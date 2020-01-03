<?php
@session_start();

require_once"adminc/class/applicant.class.php";
$app= new Applicant();
if(isset($_POST['appsubmit'])){

	$app->set('f_name',$_POST['f_name']);
	$app->set('gender',$_POST['gender']);
	$app->set('dob',$_POST['dob']);
	$app->set('p_address',$_POST['p_address']);
	$app->set('contact_no',$_POST['contact_no']);
	$app->set('email',$_POST['email']);
	$app->set('father_name',$_POST['father_name']);
	$app->set('occupation',$_POST['occupation']);
	$app->set('mother_name',$_POST['mother_name']);
	$app->set('last_exampass',$_POST['last_exampass']);
	$app->set('pass_year',$_POST['pass_year']);
	$app->set('nos_c',$_POST['nos_c']);
	$app->set('percentage',$_POST['percentage']);
	
	$app->set('applied_date',date('Y-m-d H:i:s'));
	$msgapp = $app->create();
	
	
}


require_once"index.php";



?>