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
$stmt = $conn->prepare("INSERT INTO esc_1 (SrNo, CircleName, DivisionName, CasesOfMultipleConnections, PremisesAddress, ReasonForMultipleConnections, year) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("issssss", $srno, $circlename, $divisionname, $cases, $address, $reason, $year);

// Loop through the POST data
foreach ($_POST['entry'] as $entry) {
    $srno = $entry['SrNo'];
    $circlename = $entry['CircleName'];
    $divisionname = $entry['DivisionName'];
    $cases = $entry['CasesOfMultipleConnections'];
    $address = $entry['PremisesAddress'];
    $reason = $entry['ReasonForMultipleConnections'];
    $year = $entry['year'];

    // Execute the prepared statement
    $stmt->execute();
}

echo "Records inserted successfully";

// Close statement and connection
$stmt->close();
$conn->close();
?>
