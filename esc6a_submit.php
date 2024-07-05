<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "esc_formate";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 $stmt = $conn->prepare("INSERT INTO esc_6a (Sno, ConsumerCategory, ConsumersAppliedForTesting, AdditionalMeterInstalledWithin3Days, MetersTestedWithin15Days, CasesOfNonCompliance, ReasonsOfDelay, MetersWithinPermissibleLimits, MetersBeyondPermissibleLimits, ConsumerContestedResults, MetersTestedAtThirdPartyAgency, ContraryResultsToLicenseeTest, year) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssssssssss", $Sno, $ConsumerCategory, $ConsumersAppliedForTesting, $AdditionalMeterInstalledWithin3Days, $MetersTestedWithin15Days, $CasesOfNonCompliance, $ReasonsOfDelay, $MetersWithinPermissibleLimits, $MetersBeyondPermissibleLimits, $ConsumerContestedResults, $MetersTestedAtThirdPartyAgency, $ContraryResultsToLicenseeTest, $year);

    // Loop through each row of the table
    foreach ($_POST['entry'] as $entry) {
        // Set parameters and execute for each row
        $Sno = $entry['Sno'];
        $ConsumerCategory = $entry['ConsumerCategory'];
        $ConsumersAppliedForTesting = $entry['ConsumersAppliedForTesting'];
        $AdditionalMeterInstalledWithin3Days = $entry['AdditionalMeterInstalledWithin3Days'];
        $MetersTestedWithin15Days = $entry['MetersTestedWithin15Days'];
        $CasesOfNonCompliance = $entry['CasesOfNonCompliance'];
        $ReasonsOfDelay = $entry['ReasonsOfDelay'];
        $MetersWithinPermissibleLimits = $entry['MetersWithinPermissibleLimits'];
        $MetersBeyondPermissibleLimits = $entry['MetersBeyondPermissibleLimits'];
        $ConsumerContestedResults = $entry['ConsumerContestedResults'];
        $MetersTestedAtThirdPartyAgency = $entry['MetersTestedAtThirdPartyAgency'];
        $ContraryResultsToLicenseeTest = $entry['ContraryResultsToLicenseeTest'];
        $year = $entry['year'];

        $stmt->execute();
    }
    
    $stmt->close();
    $conn->close();
    echo "Records inserted successfully";
    ?>
