<?php
include_once '../config/config.php';

if (isset($_POST['icid']) && isset($_POST['name'])) {
    $icid = $_POST['icid'];
    $name = $_POST['name'];

    // SQL-Abfrage zum Speichern des Namens zur ausgewählten ICID erstellen
    $sql = "UPDATE icid SET name = '$name' WHERE id = $icid";

    // SQL-Abfrage ausführen
    if (mysqli_query($conn, $sql)) {
        echo "Name erfolgreich zur ICID hinzugefügt.";
    } else {
        echo "Fehler beim Hinzufügen des Namens zur ICID: " . mysqli_error($conn);
    }
} else {
    echo "Fehler: ICID oder Name nicht übergeben.";
}

mysqli_close($conn);
?>
