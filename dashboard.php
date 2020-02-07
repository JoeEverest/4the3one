<?php
include("includes/config.php");
?>
<?php
include("header.php");?>
<title>Dashboard</title>
<?php
include("nav.php");
?>
<div class="image">
    <h1>SELECT YOUR FIELD</h1>
</div>
<div class="container">
    
    <?php
    $getCategory = "SELECT * FROM fields ORDER BY id ASC";
    $getCategory =  mysqli_query($connect, $getCategory);
    while ($row = mysqli_fetch_array($getCategory)) {
        $id = $row['id'];
        $name = $row['name'];
    ?>
    <a class="wrapper" href="paths.php?id=<?php echo $id; ?>">
        <div class="item">
            <span class="text"><?php echo $name; ?></span>
        </div>
    </a>
    <?php
    }
    include("footer.php");
    ?>
