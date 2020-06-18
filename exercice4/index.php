<?php
setlocale(LC_TIME, 'fr_FR.UTF-8', 'fr_FR.UTF-8');
date_default_timezone_set("Europe/Paris");

$currentDate = strftime('%A %d %B %Y, %H:%M');
$timestampCurrentDate = time($currentDate);
$oldDate = strftime('02/08/2016, 15:00');
$TimestampOldDate = strtotime($oldDate);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice4</title>
</head>
<body>
    <h1>exercice4</h1>
    <p>Afficher le timestamp du jour.  
Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>
    <div><?= 'Nous sommes le ' . $currentDate ?></div>
    <div><?= 'Nous sommes le ' . $timestampCurrentDate ?></div><br>
    <div><?= 'Nous sommes le ' . $oldDate ?></div>
    <div><?= 'Nous sommes le ' . $TimestampOldDate ?></div>
    
</body>
</html>