<?php
// Sitzung starten oder fortsetzen
if (session_status() === PHP_SESSION_NONE)
{

    session_start();
}

// if Server Request Method gleich POST
if ($_SERVER ['REQUEST_METHOD']== 'POST'){

    // Zufällige Glückskeks-Botschaft auswählen und in der Session speichern
    $gluecksbotschaften = array(
        "Du wirst einen schönen Tag haben.",
        "Erfolg ist dir sicher.",
        "Gute Nachrichten erwarten dich bald.",
        "Glück ist das, was du daraus machst."
    );
    $zufaellige_index = array_rand($gluecksbotschaften);
    $_SESSION['glueckskeks_botschaft'] = $gluecksbotschaften[$zufaellige_index];
    
    // Weiterleiten zur  glueckskeks_ausgabe.php mit heade
    header('Location: glueckskeks_ausgabe.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Glückskeks-Spiel</title>
</head>
<body>
    <h2>Glückskeks-Spiel</h2>
    <p>Öffne den Glückskeks und finde deine Botschaft des Tages!</p>
    <form method="POST" action="">
        <input type="submit" value="Öffnen">
    </form>
</body>
</html>