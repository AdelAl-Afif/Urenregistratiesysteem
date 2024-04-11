<?php
function opslaan_in_csv($naam, $datum, $gewerkte_uren, $project) {
    $file = fopen('urenregistratie.csv', 'a');
    if ($file !== false) {
        fputcsv($file, array($naam, $datum, $gewerkte_uren, $project));
        fclose($file);
    } else {
        echo "Fout bij openen van CSV-bestand.\n";
    }
}
?>
