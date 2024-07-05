<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "esc_formate";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO esc_5c (Sno, RegionName, PortableMeterTestingEquipments, PortableMeterTestingEquipmentsRural, MeterTestingBenchesCapacity, Remarks, year) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("issssss", $Sno, $RegionName, $PortableMeterTestingEquipments, $PortableMeterTestingEquipmentsRural, $MeterTestingBenchesCapacity, $Remarks, $year);

foreach ($_POST['entry'] as $entry) {
    $Sno = $entry['Sno'];
    $RegionName = $entry['RegionName'];
    $PortableMeterTestingEquipments = $entry['PortableMeterTestingEquipments'];
    $PortableMeterTestingEquipmentsRural = $entry['PortableMeterTestingEquipmentsRural'];
    $MeterTestingBenchesCapacity = $entry['MeterTestingBenchesCapacity'];
    $Remarks = $entry['Remarks'];
    $year = $entry['year'];


    $stmt->execute();
}

$stmt->close();
$conn->close();
echo "Records inserted successfully";
?>