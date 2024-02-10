<?php
$servername = "localhost";
$username = "icid_user";
$password = "0481837041";
$dbname = "icid_app";

// Datenbankverbindung herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich hergestellt wurde
if ($conn->connect_error) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
}
?>
