<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "esc_formate";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO esc_7 (Sno, ConsumerCategory, ConsumersAppliedForTesting, CasesWithTestingWithin7Days, ConsumersMeterReplacedWithin24HoursUrban, ConsumersMeterReplacedWithin72HoursRural, CasesOfNonComplianceTimeline5, CasesOfNonComplianceTimeline6, ReasonsForNonCompliance, TotalClaimsForCompensationReceived, CasesCompensationPaidByLicensee, TotalCompensationAmountINR, year) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("issssssssssss", $Sno, $ConsumerCategory, $ConsumersAppliedForTesting, $CasesWithTestingWithin7Days, $ConsumersMeterReplacedWithin24HoursUrban, $ConsumersMeterReplacedWithin72HoursRural, $CasesOfNonComplianceTimeline5, $CasesOfNonComplianceTimeline6, $ReasonsForNonCompliance, $TotalClaimsForCompensationReceived, $CasesCompensationPaidByLicensee, $TotalCompensationAmountINR, $year);

// Loop through each row of the table
foreach ($_POST['entry'] as $entry) {
    // Set parameters and execute for each row
    $Sno = $entry['Sno'];
    $ConsumerCategory = $entry['ConsumerCategory'];
    $ConsumersAppliedForTesting = $entry['ConsumersAppliedForTesting'];
    $CasesWithTestingWithin7Days = $entry['CasesWithTestingWithin7Days'];
    $ConsumersMeterReplacedWithin24HoursUrban = $entry['ConsumersMeterReplacedWithin24HoursUrban'];
    $ConsumersMeterReplacedWithin72HoursRural = $entry['ConsumersMeterReplacedWithin72HoursRural'];
    $CasesOfNonComplianceTimeline5 = $entry['CasesOfNonComplianceTimeline5'];
    $CasesOfNonComplianceTimeline6 = $entry['CasesOfNonComplianceTimeline6'];
    $ReasonsForNonCompliance = $entry['ReasonsForNonCompliance'];
    $TotalClaimsForCompensationReceived = $entry['TotalClaimsForCompensationReceived'];
    $CasesCompensationPaidByLicensee = $entry['CasesCompensationPaidByLicensee'];
    $TotalCompensationAmountINR = $entry['TotalCompensationAmountINR'];
    $year = $entry['year'];

    $stmt->execute();
}

$stmt->close();
$conn->close();
echo "Records inserted successfully";
?>
