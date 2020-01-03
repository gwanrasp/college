<?php
require_once"header.php";
?>

<?php
require_once"adminc/class/program.class.php";
$id = $_GET['pid'];
$program = new Program();
$program->id = $id;
$data3 = $program->getProgramByID();
?>

<div class="container">
<?php foreach($data3 as $dd) {?>
<img src="images/b1.jpg " class="img-responsive">
<div class="jumbotron">
					<h1 align="center" style="color:teal;"><strong><u><?php echo $dd->course_name; ?></u></strong></h1><br><br>
					<h3><strong><u>Academic requirement:</u></strong><br><?php echo $dd->academic_requirement; ?></h3><br><br>
					<h3><strong><u>Description:</u></strong><br><?php echo $dd->description; ?></h3><br><br>
					<h3><strong><u>Syllables:</u></strong><br><?php echo $dd->syllables; ?></h3><br><br>
					<h3><strong><u>Credit Hours:</u></strong><br><?php echo $dd->credit_hours; ?></h3>


</div>					
<?php }?>
					

</div>

<?php
require_once"footer.php";
?>