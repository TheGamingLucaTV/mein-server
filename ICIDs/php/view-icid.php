<?php
include_once '../config/config.php';

$sql = "SELECT * FROM icid";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alle ICIDs ansehen</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <h1>Alle ICIDs ansehen</h1>
    
    <ul>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>ID: " . $row["id"] . " - ICID: " . $row["icid_number"] . " - Name: " . $row["name"] . " - Beschreibung: " . $row["description"] . "</li>";
            }
        } else {
            echo "Keine ICIDs gefunden.";
        }
        ?>
    </ul>
</body>
</html>
