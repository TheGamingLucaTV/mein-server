<?php
include_once '../config/config.php';

// SQL-Abfrage zum Abrufen aller ICIDs erstellen
$sql = "SELECT * FROM icid";

// SQL-Abfrage ausführen
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Tabelle erstellen und ICIDs anzeigen
    echo '<table border="1">
            <tr>
                <th>ID</th>
                <th>ICID-Nummer</th>
            </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['icid_number'] . '</td>
              </tr>';
    }

    echo '</table>';
} else {
    echo 'Keine ICIDs vorhanden.';
}

mysqli_close($conn);
?>
