<?php include("header.php");?>
<title>Course Content</title>
<?php include("nav.php"); ?>
<div class="image2 image">
    <h1>Software Development</h2>
</div>
<br>
<div class="container">
<?php
$dir    = 'd:/courses/Udemy - Learn Python Programming Masterclass/';
$files = scandir($dir);

// print_r($files);

$arrlength = count($files);

for($x = 2; $x < $arrlength; $x++) {
    ?>
    <li class="directory">
        <a href="file.php?id=<?php echo $dir.$files[$x]; ?>&title=<?php echo $files[$x];?>"><?php echo $files[$x]; ?></a>
    </li>
    <?php
}

include("footer.php");
?>