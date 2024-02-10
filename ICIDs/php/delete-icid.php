<?php
include_once '../config/config.php';

// Überprüfen, ob eine ICID zum Löschen angegeben wurde
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL-Abfrage zum Löschen der ICID erstellen
    $sql = "DELETE FROM icid WHERE id = $id";

    // SQL-Abfrage ausführen
    if(mysqli_query($conn, $sql)) {
        echo "ICID erfolgreich gelöscht.";
    } else {
        echo "Fehler beim Löschen der ICID: " . mysqli_error($conn);
    }
} else {
    echo "Keine ICID zum Löschen angegeben.";
}

mysqli_close($conn);
?>
