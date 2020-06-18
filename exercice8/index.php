<?php
setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set("Europe/Paris");

$message = strftime('%A %d %B %Y', strtotime('-22 days'));

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice8</title>
</head>
<body>
    <h1>exercice8</h1>
    <p>Afficher la date du jour - 22 jours</p>
    <div><?= $message ?></div>
    
</body>
</html>