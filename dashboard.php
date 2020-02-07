<?php
include("includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/ebs-contact-form.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard</title>
</head>
<body>

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
</nav>
<div class="container">
    <br>
    <h2>SELECT YOUR FIELD</h2>
    <?php
    $getCategory = "SELECT * FROM fields ORDER BY id ASC";
    $getCategory =  mysqli_query($connect, $getCategory);
    while ($row = mysqli_fetch_array($getCategory)) {
        $id = $row['id'];
        $name = $row['name'];
    ?>
    <div class="item"><a href="paths.php?id=<?php echo $id; ?>"><?php echo $name; ?></a></div>
    <?php
    }
    ?>
</div>

    
</body>
</html>