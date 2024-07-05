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
$stmt = $conn->prepare("INSERT INTO esc_5a (Sno, Particulars, Category, TotalMetersInstalledAtBeginning, totlElectroMechanicalMeters, totalElectronicMeters, totalSmartMeters, MetersInspectedDuringPeriod, mtrElectroMechanicalMeters, mtrElectronicMeters, mtrSmartMeters, PercentageInspected, perElectroMechanicalMeters, perElectronicMeters, perSmartMeters, year) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("issiiiiiiiiiiiii", $Sno, $Particulars, $Category, $TotalMetersInstalledAtBeginning, $totlElectroMechanicalMeters, $totalElectronicMeters, $totalSmartMeters, $MetersInspectedDuringPeriod, $mtrElectroMechanicalMeters, $mtrElectronicMeters, $mtrSmartMeters, $PercentageInspected, $perElectroMechanicalMeters, $perElectronicMeters, $perSmartMeters, $year);

foreach ($_POST['entry'] as $entry) {
    $Sno = isset($entry['Sno']) ? $entry['Sno'] : null;
    $Particulars = isset($entry['Particulars']) ? $entry['Particulars'] : '';
    $Category = isset($entry['Category']) ? $entry['Category'] : '';
    $TotalMetersInstalledAtBeginning = isset($entry['TotalMetersInstalledAtBeginning']) ? $entry['TotalMetersInstalledAtBeginning'] : 0;
    $totlElectroMechanicalMeters = isset($entry['totlElectroMechanicalMeters']) ? $entry['totlElectroMechanicalMeters'] : 0;
    $totalElectronicMeters = isset($entry['totalElectronicMeters']) ? $entry['totalElectronicMeters'] : 0;
    $totalSmartMeters = isset($entry['totalSmartMeters']) ? $entry['totalSmartMeters'] : 0;
    $MetersInspectedDuringPeriod = isset($entry['MetersInspectedDuringPeriod']) ? $entry['MetersInspectedDuringPeriod'] : 0;
    $mtrElectroMechanicalMeters = isset($entry['mtrElectroMechanicalMeters']) ? $entry['mtrElectroMechanicalMeters'] : 0;
    $mtrElectronicMeters = isset($entry['mtrElectronicMeters']) ? $entry['mtrElectronicMeters'] : 0;
    $mtrSmartMeters = isset($entry['mtrSmartMeters']) ? $entry['mtrSmartMeters'] : 0;
    $PercentageInspected = isset($entry['PercentageInspected']) ? $entry['PercentageInspected'] : 0.0;
    $perElectroMechanicalMeters = isset($entry['perElectroMechanicalMeters']) ? $entry['perElectroMechanicalMeters'] : 0.0;
    $perElectronicMeters = isset($entry['perElectronicMeters']) ? $entry['perElectronicMeters'] : 0.0;
    $perSmartMeters = isset($entry['perSmartMeters']) ? $entry['perSmartMeters'] : 0.0;
    $year = isset($entry['year']) ? $entry['year'] : 0;

    $stmt->execute();
}

$stmt->close();
$conn->close();
echo "Records inserted successfully";
?>
