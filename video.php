<?php include("header.php");?>
<title>Course Content</title>
<?php include("nav.php"); ?>
<div class="container">
<?php
$video  = $_GET['id'];
?>
    <video width="960" height="540" controls>
        <source src="<?php echo $video; ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
<?php include("footer.php"); ?>