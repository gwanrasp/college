<?php
$id = $_GET['id'];
require_once"class/team.class.php";
$team = new Team();
$team->id = $id;
echo $team->remove();

?>
<a href="list_team.php">GO BACK</a>