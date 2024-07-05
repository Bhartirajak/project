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
$stmt = $conn->prepare("INSERT INTO esc_2 (RegionName, TotalStreetLights, StreetLightPoints, LEDLightsNumber, LEDLightsPowerKW, NonLEDLightsNumber, NonLEDLightsPowerKW, TotalNumber, TotalPowerKW, ProgrammableSwitch, year) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssss", $regionName, $totalStreetLights, $streetLightPoints, $ledLightsNumber, $ledLightsPowerKW, $nonLEDLightsNumber, $nonLEDLightsPowerKW, $totalNumber, $totalPowerKW, $programmableSwitch, $year);

// Loop through the POST data
foreach ($_POST['entry'] as $entry) {
    $regionName = $entry['RegionName'];
    $totalStreetLights = $entry['TotalStreetLights'];
    $streetLightPoints = $entry['StreetLightPoints'];
    $ledLightsNumber = $entry['LEDLightsNumber'];
    $ledLightsPowerKW = $entry['LEDLightsPowerKW'];
    $nonLEDLightsNumber = $entry['NonLEDLightsNumber'];
    $nonLEDLightsPowerKW = $entry['NonLEDLightsPowerKW'];
    $totalNumber = $entry['TotalNumber'];
    $totalPowerKW = $entry['TotalPowerKW'];
    $programmableSwitch = $entry['ProgrammableSwitch'];
    $year = $entry['year'];

    // Execute the prepared statement
    $stmt->execute();
}

echo "Records inserted successfully";

// Close statement and connection
$stmt->close();
$conn->close();
?>
