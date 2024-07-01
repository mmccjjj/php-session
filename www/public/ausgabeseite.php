<?php
// Sitzung starten oder fortsetzen
if (session_status() === PHP_SESSION_NONE)
{

    session_start();
}

if (isset($_SESSION['benutzername'])){
    $benutzername= $_SESSION['benutzername'];
}else{
    $benutzername= "Kein Benutzername gefunden";
}
// if Session isset
    // Daten aus der Session abrufen und in die Variable $benutzername speichern

// else der Variable "Kein Benutzername gefunden" zweisen

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ausgabeseite</title>
</head>
<body>
    <h2>Ausgabeseite</h2>
    <p>Benutzername: <?php echo $benutzername; ?></p>
    <a href="eingabeformular.php">Zurück zum Eingabeformular</a>
</body>
</html>