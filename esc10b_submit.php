<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "esc_formate";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO esc_10b (Sno, RegionName, ComplaintsPendingBeginning, ComplaintsReceivedDuringPeriod, TotalComplaintsReceived, ComplaintsResolvedSameDay, ComplaintsResolvedWithin5Days, ComplaintsPendingEnd, year) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssssssi", $Sno, $RegionName, $ComplaintsPendingBeginning, $ComplaintsReceivedDuringPeriod, $TotalComplaintsReceived, $ComplaintsResolvedSameDay, $ComplaintsResolvedWithin5Days, $ComplaintsPendingEnd, $year);

// Loop through the POST data
foreach ($_POST['entry'] as $entry) {
    // Check if key exists before accessing it
    if (isset($entry['Sno'], $entry['RegionName'], $entry['ComplaintsPendingBeginning'], $entry['ComplaintsReceivedDuringPeriod'], $entry['TotalComplaintsReceived'], $entry['ComplaintsResolvedSameDay'], $entry['ComplaintsResolvedWithin5Days'], $entry['ComplaintsPendingEnd'], $entry['year'])) {
        $Sno = $entry['Sno'];
        $RegionName = $entry['RegionName'];
        $ComplaintsPendingBeginning = $entry['ComplaintsPendingBeginning'];
        $ComplaintsReceivedDuringPeriod = $entry['ComplaintsReceivedDuringPeriod'];
        $TotalComplaintsReceived = $entry['TotalComplaintsReceived'];
        $ComplaintsResolvedSameDay = $entry['ComplaintsResolvedSameDay'];
        $ComplaintsResolvedWithin5Days = $entry['ComplaintsResolvedWithin5Days'];
        $ComplaintsPendingEnd = $entry['ComplaintsPendingEnd'];
        $year = $entry['year'];

        // Execute the prepared statement
        $stmt->execute();
    } 
}

echo "Records inserted successfully";

// Close statement and connection
$stmt->close();
$conn->close();
?>
