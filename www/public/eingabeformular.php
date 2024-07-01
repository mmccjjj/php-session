<?php
// Sitzung starten oder fortsetzen
if (session_status() === PHP_SESSION_NONE)
{

    session_start();
}

// if Server Request Method gleich POST
if ($_SERVER ['REQUEST_METHOD']== 'POST'){

    $_SESSION['benutzername']= $_POST['benutzername'];

    header('Location: ausgabeseite.php');
    exit();
}

   // Session benutzername gleich POST benutzername

   // Weiterleiten auf die ausgabeseite mit header(..)

?>

<!DOCTYPE html>
<html>
<head>
    <title>Eingabeformular</title>
</head>
<body>
    <h2>Benutzereingabe</h2>
    <form method="POST" action="">
        <label for="benutzername">Benutzername:</label>
        <input type="text" id="benutzername" name="benutzername" required><br><br>
        
        <input type="submit" value="Speichern">
    </form>
</body>
</html>