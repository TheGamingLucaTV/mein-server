<?php
include_once '../config/config.php';

// SQL-Abfrage zum Abrufen aller ICIDs erstellen
$sql = "SELECT * FROM icid";

// SQL-Abfrage ausführen
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // JSON-Format für die Rückgabe vorbereiten
    $icids = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $icids[] = $row;
    }

    // JSON-Daten ausgeben
    echo json_encode($icids);
} else {
    echo 'Keine ICIDs vorhanden.';
}

mysqli_close($conn);
?>
