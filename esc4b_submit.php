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
$stmt = $conn->prepare("INSERT INTO esc_4b (Sno, MeterType, MetersInstalledAtBeginning, MetersInstalledDuringPeriod, TotalMetersInstalledAtEnd, MetersAvailableInStock, year) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isiiiii", $Sno, $MeterType, $MetersInstalledAtBeginning, $MetersInstalledDuringPeriod, $TotalMetersInstalledAtEnd, $MetersAvailableInStock, $year);

foreach ($_POST['entry'] as $entry) {
    $Sno = $entry['Sno'];
    $MeterType = $entry['MeterType'];
    $MetersInstalledAtBeginning = $entry['MetersInstalledAtBeginning'];
    $MetersInstalledDuringPeriod = $entry['MetersInstalledDuringPeriod'];
    $TotalMetersInstalledAtEnd = $entry['TotalMetersInstalledAtEnd'];
    $MetersAvailableInStock = $entry['MetersAvailableInStock'];
    $year = $entry['year'];

    $stmt->execute();
}

$stmt->close();
$conn->close();
echo "Records inserted successfully";
?>
