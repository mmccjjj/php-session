<?php
// Sitzung starten oder fortsetzen
if (session_status() === PHP_SESSION_NONE)
{

    session_start();
}
// if Server Request Method gleich POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Benutzereinstellungen aus dem Formular erhalten und einer Variable hinzufügen
    $hintergrundfarbe = $_POST['hintergrundfarbe'];
    $schriftgroesse = $_POST['schriftgroesse'];

    // Einstellungen in Sitzungen speichern (Variablen)
    $_SESSION['hintergrundfarbe'] = $hintergrundfarbe;
    $_SESSION['schriftgroesse'] = $schriftgroesse;
    
    // Weiterleitung zur user_page.php mit header(...)
    header('Location: user_page.php');

    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Einstellungen</title>
</head>
<body>
    <h2>Ihre Einstellungen festlegen</h2>
    <form method="POST" action="">
        <label for="hintergrundfarbe">Hintergrundfarbe:</label>
        <input type="color" id="hintergrundfarbe" name="hintergrundfarbe" required><br><br>
        
        <label for="schriftgroesse">Schriftgröße:</label>
        <input type="range" id="schriftgroesse" name="schriftgroesse" min="10" max="32" step="2" required><br><br>
        
        <input type="submit" value="Einstellungen speichern">
    </form>
</body>
</html>