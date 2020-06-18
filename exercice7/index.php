<?php
setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set("Europe/Paris");

$message = strftime('%A %d %B %Y', strtotime('+20 days'));

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice7</title>
</head>
<body>
    <h1>exercice7</h1>
    <p>Afficher la date du jour + 20 jours.</p>
    <div><?= $message ?></div>
    
</body>
</html>