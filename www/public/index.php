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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Include Exercise</title>
</head>

<body>

  <?php

  include 'dashboard.php';
  $_SESSION['username'] = 'MaxMustermann';
  $_SESSION['user_id'] = 123;

  $username = $_SESSION['username'];
  $user_id = $_SESSION['user_id'];

  echo "<h1>Hello $username</h1>"


  /* phpinfo(); */

  ?>

</body>

</html>