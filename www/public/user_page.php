<?php
// Sitzung starten oder fortsetzen
if (session_status() === PHP_SESSION_NONE)
{

    session_start();
}

// Überprüfen, ob Benutzereinstellungen vorhanden sind; andernfalls Standardwerte verwenden
$hintergrundfarbe = isset($_SESSION['hintergrundfarbe']) ? $_SESSION['hintergrundfarbe'] : 'weiß';
$schriftgroesse = isset($_SESSION['schriftgroesse']) ? $_SESSION['schriftgroesse'] : '16px';


?>

<!DOCTYPE html>
<html>
<head>
    <title>Benutzereinstellungen</title>
</head>
<body style="background-color: <?php echo $hintergrundfarbe; ?>; font-size: <?php echo $schriftgroesse. 'px'; ?>;">
    <h2>Ihre angepasste Seite</h2>
    <p>Dies ist Ihre angepasste Seite mit Hintergrundfarbe und Schriftgrößeneinstellungen.</p>
    <a href="einstellungen.php">Einstellungen ändern</a>
</body>
</html>