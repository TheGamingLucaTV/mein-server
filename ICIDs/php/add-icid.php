<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verbindung zur Datenbank herstellen (ersetze dies mit deinen Verbindungsdaten)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "deineDatenbank";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Überprüfen, ob die Verbindung erfolgreich hergestellt wurde
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // ICID aus dem Formular abrufen
    $icid = $_POST["icid"];

    // SQL-Query zum Einfügen der ICID in die Datenbank (ersetze dies mit deiner Tabelle und Spalten)
    $sql = "INSERT INTO deineTabelle (icid_column) VALUES ('$icid')";

    if ($conn->query($sql) === TRUE) {
        echo "ICID wurde erfolgreich hinzugefügt.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Verbindung schließen
    $conn->close();
}
?>
