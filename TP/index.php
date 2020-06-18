<?php
setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set('Europe/Paris');

$monthArray = [
    1 => 'Janvier',
    2 => 'Février',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Aout',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Decembre'
];

$calendarDays = [
    1 => 'Lundi',
    2 => 'Mardi',
    3 => 'Mercredi',
    4 => 'Jeudi',
    5 => 'Vendredi',
    6 => 'Samedi',
    7 => 'Dimanche'
];

$daysArray = [
    'lundi' => 1,
    'mardi' => 2,
    'mercredi' => 3,
    'jeudi' => 4,
    'vendredi' => 5,
    'samedi' => 6,
    'dimanche' => 7
];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
    $dayInMonth = cal_days_in_month(CAL_GREGORIAN, $_POST['months'], $_POST['years']);
    $myFirstDayStr = strftime('%A', strtotime($_POST['years'] . '-' . $_POST['months'] . '-01'));
    $myFirstDay = $daysArray[$myFirstDayStr];
    $chosenYear = $_POST['years'];
    $chosenMonth = $_POST['months'];
} else {
    $monthNow = strftime('%m');
    $yearNow = strftime('%Y');
    $dayInMonth = cal_days_in_month(CAL_GREGORIAN, $monthNow, $yearNow);
    $myFirstDayStr = strftime('%A', strtotime($yearNow . '-' . $monthNow . '-01'));
    $myFirstDay = $daysArray[$myFirstDayStr];
    $chosenYear = $yearNow;
    $chosenMonth = intval($monthNow);
}
var_dump($myFirstDay);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Calendrier</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mb-3">
                <div class="h3 text-info mb-3 mt-3">TP Calendrier</div>
                <div class="h5 text-secondary">Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
                    En fonction des choix, afficher un calendrier comme celui-ci :</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <form enctype="multipart/form-data" action="" method="post">
                    <div class="form-group">
                        <label for="selectMonth" class="text-info font-weight-bold">Choisissez un moi</label>
                        <select class="form-control form-control-sm" name="months" id="selectMonth">
                            <option value="" disabled selected></option>
                            <?php
                            foreach ($monthArray as $key => $month) { ?>
                                <option value="<?= $key ?>"><?= $month ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="selectYear" class="text-info font-weight-bold">Choisissez une année</label>
                        <select class="form-control form-control-sm" name="years" id="selectYear">
                            <option value="" disabled selected></option>
                            <?php
                            for ($yearChoice = 2015; $yearChoice <= 2035; $yearChoice++) {
                            ?>
                                <option value="<?= $yearChoice ?>"><?= $yearChoice ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-outline-info">Valider</button>
                </form>
            </div>
        </div>
        <?php

        ?>
        <div class='row justify-content-center h3 text-info'>
            <?= $monthArray[$chosenMonth] . ' ' . $chosenYear ?>
        </div>
        <table class="table table-bordered mt-3 mb-3">
            <thead>
                <tr class="table-info text-center">
                    <?php
                    foreach ($calendarDays as $key => $days) { ?>
                        <th class="border border-secondary" style="width:10%"><?= $days ?></th>
                    <?php
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $day = 0;
                    $caseTotal = $dayInMonth + $myFirstDay - 1;
                    for ($caseNb = 1; $caseNb <= $caseTotal + 7 - ($caseTotal % 7); $caseNb++) {
                        if ($caseNb >= $myFirstDay) {
                            $day++;
                    ?>
                            <td class="border border-secondary"><?= $day <= $dayInMonth ? $day : '' ?></td>
                        <?php } else { ?>
                            <td class="border border-secondary bg-light"></td>
                        <?php }
                        if (($caseNb % 7) == 0) { ?>
                </tr>
                <tr>
            <?php }
                    }
            ?>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>