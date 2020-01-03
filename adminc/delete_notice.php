<?php
$id = $_GET['id'];
require_once"class/notice.class.php";
$notice = new Notice();
$notice->id = $id;
echo $notice->remove();

?>
<a href="list_notice.php">GO BACK</a>