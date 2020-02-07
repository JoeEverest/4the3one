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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paths in: <?php echo $name ?></title>
</head>
<body>
    <?php
    $getCategory = "SELECT * FROM paths WHERE category_id = '$categoryid' ORDER BY id ASC";
    $getCategory =  mysqli_query($connect, $getCategory);
    while ($row = mysqli_fetch_array($getCategory)) {
        $id = $row['id'];
        $name = $row['name'];
    ?>
    <div class="item">
        <a href="content.php?id=<?php echo $id; ?>"><?php echo $name; ?></a>
    </div>
    <?php
    }
    ?>
</body>
</html>