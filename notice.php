<?php
require_once"header.php";
?>

<?php
require_once"adminc/class/notice.class.php";
$id = $_GET['nid'];
$notice = new Notice();
$notice->id = $id;
$data4 = $notice->getNoticeByID();
?>

<div class="container">
<?php foreach($data4 as $nn) {?>
<br><div class="container"><img src="adminc/images/<?php echo $nn->feature_image; ?>" class="img-responsive" style="margin-left:200px;" alt="Notice NCIT"></div>
<div class="jumbotron">
					<h1 align="center" style="color:teal;"><strong><u><?php echo $nn->title; ?></u></strong></h1><br><br><br><br>
					
					<h3><strong><u>Description:</u></strong><br><?php echo $nn->description; ?></h3><br><br>
					

</div>					
<?php }?>
					

</div>

<?php
require_once"footer.php";
?>