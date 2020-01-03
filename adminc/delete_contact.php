<?php
$id = $_GET['id'];
require_once"class/contact.class.php";
$contact = new Contact();
$contact->id = $id;
echo $contact->remove();

?>
<a href="list_contacts.php">GO BACK</a>