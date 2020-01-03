<?php 
@session_start();
require_once"adminc/class/contact.class.php";
$contact = new Contact();
if(isset($_POST['consubmit'])){
	$contact->set('f_name',$_POST['f_name']);
	$contact->set('l_name',$_POST['l_name']);
	$contact->set('email',$_POST['email']);
	$contact->set('subject',$_POST['subject']);
	$contact->set('message',$_POST['message']);
	$contact->set('submit_date',date('Y-m-d H:i:s'));
	$msgcon=$contact->create();
}


require_once"index.php";

?>