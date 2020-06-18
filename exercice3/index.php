<?php
$messageEng = strftime('%A %d %B %Y');
setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set("Europe/Paris");
$message = strftime('%A %d %B %Y');
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice3</title>
</head>

<body>
    <h1>exercice3</h1>
    <p>Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
        Bonus : Le faire en français.</p>
    <div><?= 'Nous sommes le ' . $messageEng ?></div>
    <div><?= 'Nous sommes le ' . $message ?></div>

</body>

</html>