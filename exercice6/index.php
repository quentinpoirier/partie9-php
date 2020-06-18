<?php
setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set("Europe/Paris");

$dayInMonth = cal_days_in_month(CAL_GREGORIAN, 2, 2016);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice6</title>
</head>
<body>
    <h1>exercice6</h1>
    <p>Afficher le nombre de jour dans le mois de février de l'année 2016.</p>
    <div><?= 'En 2016, il y avait ' . $dayInMonth . ' jours au moi de février.' ?></div>
    
</body>
</html>