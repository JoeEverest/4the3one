<?php
include("../includes/config.php");

if (isset($_POST['add_category'])) {
    if (!$_POST['name'] | !$_POST['path_category']) {
        echo "Name can not be empty";
    }else{
        $pathName = $_POST['name'];
        $categoryID = $_POST['path_category'];

        $insert = "INSERT INTO paths VALUES ('', '$pathName','$categoryID')";

        if (mysqli_query($connect, $insert)) {
        }else {
            echo mysqli_error($connect);
            echo 'There was an error '.$error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../assets/js/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/ebs-contact-form.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form method="post">
        <input class="form-control" type="text" name="name" placeholder="Path Name">
        <select class="form-control" name="path_category">
            <?php

            $getCategory = "SELECT * FROM fields ORDER BY id ASC";
            $getCategory =  mysqli_query($connect, $getCategory);
            while ($row = mysqli_fetch_array($getCategory)) {
                $id = $row['id'];
                $name = $row['name'];

            ?>
            <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
            <?php } ?>
        </select>
        <button class="btn btn-warning" type="submit" name="add_category">Submit</button>
    </form>
    </div>
</body>
</html>