<?php
$id = $_GET['id'];
require_once"class/subscriber.class.php";
$subscriber = new Subscriber();
$subscriber->id = $id;
echo $subscriber->remove();

?>
<a href="list_subscribers.php">GO BACK</a>