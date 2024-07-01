<?php
// Sitzung starten oder fortsetzen
if (session_status() === PHP_SESSION_NONE)
{

    session_start();
}

// if Session isset
if (!isset($_SESSION['glueckskeks_botschaft'])) {
    // Wenn keine Botschaft vorhanden ist, zur Startseite weiterleiten mit header
    header('Location: glueckskeks.php');

    exit();
}

// Session Daten der $glueckskeks_botschaft Variable zuweisen
$glueckskeks_botschaft= $_SESSION['glueckskeks_botschaft'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Glückskeks-Ausgabe</title>
</head>
<body>
    <h2>Deine Glückskeks-Botschaft des Tages</h2>
    <p><?php echo $glueckskeks_botschaft; ?></p>
    <a href="glueckskeks.php">Nochmal öffnen</a>
</body>
</html>