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
/*         if (isset($_SESSION["message"])) {
            $message = $_SESSION["message"];
        } else {
            $message = "No message found";
        } */

        if (empty($_SESSION["message"])) {
            $message = $_SESSION["message"];
        } else {
            $message = "Session 'message' is empty";
        }
    echo $message;
?>


    
</body>
</html>