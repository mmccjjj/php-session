<?php
// Sitzung starten oder fortsetzen
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// if Server Request Method gleich POST

    // Wenn der Besuchszaehler nicht gesetzt ist (session), initialisieren ihn auf 0
    $_SESSION['besuchszaehler'] = 0;

// Erhöhen Sie den Besuchszaehler bei jedem Besuch
$_SESSION['besuchszaehler']++;
$besuchszaehler = $_SESSION['besuchszaehler'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Seitenzähler</title>
</head>
<body>
    <h2>Willkommen beim Seitenzähler</h2>
    <p>Diese Seite wurde bereits <?php echo $besuchszaehler; ?> Mal besucht.</p>
    <a href="counter_reset.php">Seitenzähler zurücksetzen</a>
</body>
</html>