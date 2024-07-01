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
    $_SESSION['message']= " ";
?>

<a href="message_output.php">Output</a>
    
</body>
</html>