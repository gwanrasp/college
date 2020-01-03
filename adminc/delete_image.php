<?php 
$id = $_GET['id'];
require_once"class/image.class.php";
$image = new Image();
$image->id=$id;
echo $image->remove();
?>

<a href="list_image.php">GO BACK</a>