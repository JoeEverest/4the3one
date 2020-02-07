<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/register.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register</title>
</head>
<body>
    <div class="formHolder">
        <div class="top">
            <h4>Register</h4>
        </div>
        <div class="form">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control" placeholder="Username">
            <label for="email">Email Adress:</label>
            <input type="email" name="email" class="form-control" placeholder="Email Adress">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
            <label for="password2">Confirm Password:</label>
            <input type="password" name="password2" class="form-control" placeholder="Confirm Password"><br>
            <button type="submit" class="btn btn-outline-primary" name="register">Register</button>
        </div>
    </div>
</body>
</html>