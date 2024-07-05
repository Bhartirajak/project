<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "esc_formate"; 

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize
    $entries = $_POST['entry'];

    // Prepare and execute SQL insert query
    $stmt = $conn->prepare("INSERT INTO esc_12 (SerialNumber, ConsumerCategory, TotalExistingConsumers, TotalConnectedLoadCol3, ConsumersNetMeteringStartPeriod, TotalConnectedLoadCol5, NewNetMeteringConnectionsReleased, TotalConnectedLoadCol7, ConsumersNetMeteringEndPeriod, TotalConnectedLoadCol9, TotalUnitsExportedToDiscom, TotalUnitsImportedFromDiscom, RPOClaimedByDiscom, RateForSettlement, year) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("isssssssssssssi", $serialNumber, $consumerCategory, $totalExistingConsumers, $totalConnectedLoadCol3, $consumersNetMeteringStartPeriod, $totalConnectedLoadCol5, $newNetMeteringConnectionsReleased, $totalConnectedLoadCol7, $consumersNetMeteringEndPeriod, $totalConnectedLoadCol9, $totalUnitsExportedToDiscom, $totalUnitsImportedFromDiscom, $rpoClaimedByDiscom, $rateForSettlement, $year);

    foreach ($entries as $entry) {
        $serialNumber = $entry['SerialNumber'];
        $consumerCategory = $entry['ConsumerCategory'];
        $totalExistingConsumers = $entry['TotalExistingConsumers'];
        $totalConnectedLoadCol3 = $entry['TotalConnectedLoadCol3'];
        $consumersNetMeteringStartPeriod = $entry['ConsumersNetMeteringStartPeriod'];
        $totalConnectedLoadCol5 = $entry['TotalConnectedLoadCol5'];
        $newNetMeteringConnectionsReleased = $entry['NewNetMeteringConnectionsReleased'];
        $totalConnectedLoadCol7 = $entry['TotalConnectedLoadCol7'];
        $consumersNetMeteringEndPeriod = $entry['ConsumersNetMeteringEndPeriod'];
        $totalConnectedLoadCol9 = $entry['TotalConnectedLoadCol9'];
        $totalUnitsExportedToDiscom = $entry['TotalUnitsExportedToDiscom'];
        $totalUnitsImportedFromDiscom = $entry['TotalUnitsImportedFromDiscom'];
        $rpoClaimedByDiscom = $entry['RPOClaimedByDiscom'];
        $rateForSettlement = $entry['RateForSettlement'];
        $year = $entry['year'];

        $stmt->execute();
    }

    echo "Form data successfully submitted.";
    $stmt->close();
}

// Close database connection
$conn->close();
?>
