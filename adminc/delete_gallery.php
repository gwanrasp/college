<?php 
$id = $_GET['id'];
require_once"class/gallery.class.php";
$gallery = new Gallery();
$gallery->id=$id;
echo $gallery->remove();
?>

<a href="list_gallery.php">GO BACK</a>