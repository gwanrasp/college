<?php
$id = $_GET['id'];
require_once"class/program.class.php";
$program = new Program();
$program->id = $id;
echo $program->remove();
?>
<a href="list_program.php">GO BACK</a>
