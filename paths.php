<?php
include("includes/config.php");
if (isset($_GET['id'])) {
    $categoryid = $_GET['id'];
    $getfield = "SELECT * FROM fields WHERE id = '$categoryid' ORDER BY id ASC";
    $getfield =  mysqli_query($connect, $getfield);
    while ($rq = mysqli_fetch_array($getfield)) {
        $id = $rq['id'];
        $name = $rq['name'];
    }
}else{
    header("Location: dashboard.php");
}
?>
<?php include("nav.php"); ?>
<div class="image image2">
    <h1>SELECT YOUR FIELD</h1>
</div>
<div class="container">
    <?php
    $getCategory = "SELECT * FROM paths WHERE category_id = '$categoryid' ORDER BY id ASC";
    $getCategory =  mysqli_query($connect, $getCategory);
    while ($row = mysqli_fetch_array($getCategory)) {
        $id = $row['id'];
        $name = $row['name'];
    ?>
    <a href="content.php?id=<?php echo $id; ?>">
        <div class="item">
            <span class="text"><?php echo $name; ?></span>
        </div>
    </a>
    <?php
    }
    ?>
</div>
    
</body>
</html>