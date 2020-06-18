<?php
$testDate = new DateTime();
echo $testDate->format('d/m/Y');
$message = date('d/m/Y');
var_dump($testDate);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice1</title>
</head>
<body>
    <h1>exercice1</h1>
    <p>Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016).</p>
    <div><?= 'Nous sommes le ' . $message ?></div>
    
</body>
</html>