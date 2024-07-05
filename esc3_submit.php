<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "esc_formate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO esc_3 (Sno, ConsumerCategory, TotalNewConnectionsReleased, NewConnectionsWithSmartMeter, NewConnectionsWithPrePaymentFeature, NewConnectionsWithNonSmartNonPrePaymentMeters, NewConnectionsWithoutMeters, TotalExistingMeteredConnections, TotalExistingUnmeteredConnections, year) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssssssss", $sno, $consumerCategory, $totalNewConnectionsReleased, $newConnectionsWithSmartMeter, $newConnectionsWithPrePaymentFeature, $newConnectionsWithNonSmartNonPrePaymentMeters, $newConnectionsWithoutMeters, $totalExistingMeteredConnections, $totalExistingUnmeteredConnections, $year);

// Loop through the POST data
foreach ($_POST['entry'] as $entry) {
    $sno = $entry['Sno'];
    $consumerCategory = $entry['ConsumerCategory'];
    $totalNewConnectionsReleased = $entry['TotalNewConnectionsReleased'];
    $newConnectionsWithSmartMeter = $entry['NewConnectionsWithSmartMeter'];
    $newConnectionsWithPrePaymentFeature = $entry['NewConnectionsWithPrePaymentFeature'];
    $newConnectionsWithNonSmartNonPrePaymentMeters = $entry['NewConnectionsWithNonSmartNonPrePaymentMeters'];
    $newConnectionsWithoutMeters = $entry['NewConnectionsWithoutMeters'];
    $totalExistingMeteredConnections = $entry['TotalExistingMeteredConnections'];
    $totalExistingUnmeteredConnections = $entry['TotalExistingUnmeteredConnections'];
    $year = $entry['year'];

    // Execute the prepared statement
    $stmt->execute();
}

echo "Records inserted successfully";

// Close statement and connection
$stmt->close();
$conn->close();
?>
