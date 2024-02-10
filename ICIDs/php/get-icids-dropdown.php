<?php
include_once '../config/config.php';

// SQL-Abfrage zum Abrufen aller ICIDs erstellen
$sql = "SELECT id, icid_number FROM icid";

// SQL-Abfrage ausführen
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Dropdown-Liste für ICIDs erstellen
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['id'] . '">' . $row['icid_number'] . '</option>';
    }
} else {
    echo '<option value="" disabled>Keine ICIDs vorhanden</option>';
}

mysqli_close($conn);
?>
