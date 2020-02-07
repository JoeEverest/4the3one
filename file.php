<?php include("header.php");?>
<title>Course Content</title>
<?php include("nav.php"); ?>
<div class="container">
<?php
$dir    = $_GET['id'].'/';
$files = scandir($dir);

// print_r($files);

$arrlength = count($files);
?>
<ul>
<?php

for($x = 2; $x < $arrlength; $x++) {
    ?>
    <li class="directory">
        <a href="video.php?id=<?php echo $dir .$files[$x]; ?>"><?php echo $files[$x]; ?></a>
    </li>
<?php
}
?>
</ul>
<?php include("footer.php"); ?>