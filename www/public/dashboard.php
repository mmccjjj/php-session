<!DOCTYPE html>
<?php
        if (session_status() === PHP_SESSION_NONE)
        {

            session_start();
        }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

 <?php

$username = $_SESSION['username'];
$user_id = $_SESSION['user_id'];

echo "<h1>Hello $username</h1>"

 ?>
</body>
</html>