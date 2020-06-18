<?php
$testDate = new DateTime();
echo $testDate->format('d-m-y');
$message = date('l d F y');
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice2</title>
</head>
<body>
    <h1>exercice2</h1>
    <p>Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16).</p>
    <div><?= 'Nous sommes le ' . $message ?></div>
    
</body>
</html>