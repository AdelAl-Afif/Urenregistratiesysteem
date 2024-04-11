<?php
$naam = readline("Voer je naam in: " . PHP_EOL);
$datum = readline("Voer de datum in (dd-mm-jjjj): " . PHP_EOL);
$gewerkte_uren = (float)readline("Voer het aantal gewerkte uren in: " . PHP_EOL);
$project = readline("Voer het projectnummer in: " . PHP_EOL);

include 'opslaan_in_csv.php';
opslaan_in_csv($naam, $datum, $gewerkte_uren, $project);
?>
