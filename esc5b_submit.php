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
$stmt = $conn->prepare("INSERT INTO esc_5b (Sno, Particulars, Category, TotalMetersInstalledAtBeginning, totalElectroMechanicalMeters, totaolElectronicMeters, totalSmartMeters, MetersInspectedDuringPeriod, mtrElectroMechanicalMeters, mtrElectronicMeters, mtrSmartMeters, PercentageInspected, perElectroMechanicalMeters, perElectronicMeters, perSmartMeters, year) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("issiiiiiiiiiiiii", $Sno, $Particulars, $Category, $TotalMetersInstalledAtBeginning, $totalElectroMechanicalMeters, $totaolElectronicMeters, $totalSmartMeters, $MetersInspectedDuringPeriod, $mtrElectroMechanicalMeters, $mtrElectronicMeters, $mtrSmartMeters, $PercentageInspected, $perElectroMechanicalMeters, $perElectronicMeters, $perSmartMeters, $year);

foreach ($_POST['entry'] as $entry) {
    $Sno = $entry['Sno'] ?? 0;
    $Particulars = $entry['Particulars'] ?? '';
    $Category = $entry['Category'] ?? '';
    $TotalMetersInstalledAtBeginning = $entry['TotalMetersInstalledAtBeginning'] ?? 0;
    $totalElectroMechanicalMeters = $entry['totalElectroMechanicalMeters'] ?? 0;
    $totaolElectronicMeters = $entry['totaolElectronicMeters'] ?? 0;
    $totalSmartMeters = $entry['totalSmartMeters'] ?? 0;
    $MetersInspectedDuringPeriod = $entry['MetersInspectedDuringPeriod'] ?? 0;
    $mtrElectroMechanicalMeters = $entry['mtrElectroMechanicalMeters'] ?? 0;
    $mtrElectronicMeters = $entry['mtrElectronicMeters'] ?? 0;
    $mtrSmartMeters = $entry['mtrSmartMeters'] ?? 0;
    $PercentageInspected = $entry['PercentageInspected'] ?? 0;
    $perElectroMechanicalMeters = $entry['perElectroMechanicalMeters'] ?? 0;
    $perElectronicMeters = $entry['perElectronicMeters'] ?? 0;
    $perSmartMeters = $entry['perSmartMeters'] ?? 0;
    $year = $entry['year'] ?? 0;

    $stmt->execute();
}

$stmt->close();
$conn->close();
echo "Records inserted successfully";
?>
