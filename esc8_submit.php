<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "esc_formate";

$conn = new mysqli($servername, $username, $password, $dbname); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO esc_8 (ConsumerCategory, TotalConnectionsMeterReadingHT, TotalConnectionsMeterReadingLT, BilledConnectionsMeterReadingHT, BilledConnectionsMeterReadingLT, BilledConnectionsProvisionalHT, BilledConnectionsProvisionalLT, PercentageBilledProvisionalHT, PercentageBilledProvisionalLT, year)  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssssssss", $ConsumerCategory, $TotalConnectionsMeterReadingHT, $TotalConnectionsMeterReadingLT, $BilledConnectionsMeterReadingHT, $BilledConnectionsMeterReadingLT, $BilledConnectionsProvisionalHT, $BilledConnectionsProvisionalLT, $PercentageBilledProvisionalHT, $PercentageBilledProvisionalLT, $year);

foreach ($_POST['entry'] as $entry) {
    $ConsumerCategory = $entry['ConsumerCategory'];
    $TotalConnectionsMeterReadingHT = $entry['TotalConnectionsMeterReadingHT'];
    $TotalConnectionsMeterReadingLT = $entry['TotalConnectionsMeterReadingLT'];
    $BilledConnectionsMeterReadingHT = $entry['BilledConnectionsMeterReadingHT'];
    $BilledConnectionsMeterReadingLT = $entry['BilledConnectionsMeterReadingLT'];
    $BilledConnectionsProvisionalHT = $entry['BilledConnectionsProvisionalHT'];
    $BilledConnectionsProvisionalLT = $entry['BilledConnectionsProvisionalLT'];
    $PercentageBilledProvisionalHT = $entry['PercentageBilledProvisionalHT'];
    $PercentageBilledProvisionalLT = $entry['PercentageBilledProvisionalLT'];
    $year = $entry['year'];

    $stmt->execute();
}

$stmt->close();
$conn->close();
echo "Records inserted successfully";
?>
