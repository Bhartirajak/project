<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "esc_formate";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO esc_9 (ConsumerCategory, TotalConsumersBilled, TotalBilledAmountINR, CollectionCashINR, CollectionChequeINR, CollectionOnlineModesINR, TotalCollectionINR, year) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("siiiiisi", $ConsumerCategory, $TotalConsumersBilled, $TotalBilledAmountINR, $CollectionCashINR, $CollectionChequeINR, $CollectionOnlineModesINR, $TotalCollectionINR, $year);

foreach ($_POST['entry'] as $entry) {
    $ConsumerCategory = $entry['ConsumerCategory'];
    $TotalConsumersBilled = $entry['TotalConsumersBilled'];
    $TotalBilledAmountINR = $entry['TotalBilledAmountINR'];
    $CollectionCashINR = $entry['CollectionCashINR'];
    $CollectionChequeINR = $entry['CollectionChequeINR'];
    $CollectionOnlineModesINR = $entry['CollectionOnlineModesINR'];
    $TotalCollectionINR = $entry['TotalCollectionINR'];
    $year = $entry['year'];

    $stmt->execute();
}

$stmt->close();
$conn->close();
echo "Records inserted successfully";
?>
