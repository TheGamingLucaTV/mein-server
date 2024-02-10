<?php
include_once '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && isset($_POST['name'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];

        $stmt = $conn->prepare("UPDATE icid SET name = ? WHERE id = ?");
        $stmt->bind_param("si", $name, $id);

        if ($stmt->execute()) {
            echo "Name erfolgreich aktualisiert.";
        } else {
            echo "Fehler beim Aktualisieren des Namens: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "ID und Name sind erforderlich.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICID Namen geben</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <h1>ICID Namen geben</h1>
    
    <form method="post" action="">
        <label for="id">ICID-ID:</label>
        <input type="text" name="id" required>

        <label for="name">Neuer Name:</label>
        <input type="text" name="name" required>

        <button type="submit">Namen aktualisieren</button>
    </form>
</body>
</html>
