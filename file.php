<?php include("header.php");?>
<title>Course Content</title>
<?php
include("nav.php");
$dir    = $_GET['id'].'/';
$title    = $_GET['title'];

$files = scandir($dir);

// print_r($files);

$arrlength = count($files);
?>
<div class="image image3">
    <h1><?php echo $title; ?></h1>
</div><br>
<div class="container">
<?php

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