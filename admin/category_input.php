<?php
include("../includes/config.php");

if (isset($_POST['add_category'])) {
    if (!$_POST['name']) {
        echo "Name can not be empty";
    }else{
        $categoryName = $_POST['name'];

        $insert = "INSERT INTO fields VALUES ('', '$categoryName')";

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
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="name" placeholder="Category Name">
        <button type="submit" name="add_category">Submit</button>
    </form>
</body>
</html>