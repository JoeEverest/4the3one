<?php include("header.php");?>
<title>Course Content</title>
<?php include("nav.php"); ?>
<div class="container">
<?php
$video  = $_GET['id'];

$name = explode("/", $video);
$videoName = $name[4];
?>
<br>
<h4><?php echo $videoName; ?></h4>
    <video width="900" height="506.25" controls>
        <source src="assets/9. Storing Items In Variables.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
        
<?php include("footer.php"); ?>