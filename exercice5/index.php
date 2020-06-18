<?php
setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set('Europe/Paris');

$currentDate = strftime('%d/%m/%Y');
$oldDate = strftime('16/05/2016');
$currentDateTimestamp = time('%d/%m/%Y');
$oldDateTimestamp = strtotime('16-05-2016');
$diff = round(($oldDateTimestamp - $currentDateTimestamp) / 86400,0);

// $currentDate = new DateTime('2020-06-15');
// $oldDate = new DateTime('2016-05-16');
// $diff = $oldDate->diff($currentDate)->format("%a");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice5</title>
</head>
<body>
    <h1>exercice5</h1>
    <p>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</p>
    <div><?= 'Il y a ' . $diff . ' jours de différences entre le ' . $oldDate . ' et le ' . $currentDate ?></div>
    
</body>
</html>