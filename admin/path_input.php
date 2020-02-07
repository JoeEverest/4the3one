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
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="name" placeholder="Path Name">
        <select name="path_category">
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
        <button type="submit" name="add_category">Submit</button>
    </form>
</body>
</html>