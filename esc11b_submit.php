<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "esc_formate";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $success = true; // Flag to track success of all insertions

    // Loop through each entry in the form
    foreach ($_POST['entry'] as $entry) {
        // Check if ReasonsForNonDisconnection key exists
        $reasonForNonDisconnection = isset($entry['ReasonsForNonDisconnection']) ? $conn->real_escape_string($entry['ReasonsForNonDisconnection']) : "";

        // Prepare SQL statement
        $sql = "INSERT INTO esc_11b (Sno, RegionName, ConnectedConsumersArrearsMoreThan3Months, ArrearsAmountInLakh, ReasonsForNonDisconnection, ConnectionsPermanentlyDisconnected, ArrearsAmountForDisconnectedConnectionsInLakh, year) 
        VALUES (
            '" . $entry['Sno'] . "',
            '" . $conn->real_escape_string($entry['RegionName']) . "',
            '" . $entry['ConnectedConsumersArrearsMoreThan3Months'] . "',
            '" . $entry['ArrearsAmountInLakh'] . "',
            '" . $reasonForNonDisconnection . "',
            '" . $entry['ConnectionsPermanentlyDisconnected'] . "',
            '" . $entry['ArrearsAmountForDisconnectedConnectionsInLakh'] . "',
            '" . $entry['year'] . "'
        )";

        // Execute SQL statement
        if (!$conn->query($sql)) {
            // If any insertion fails, set the success flag to false
            $success = false;
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Display success message if all insertions were successful
    if ($success) {
        echo "New records created successfully<br>";
    }
}

// Close database connection
$conn->close();
?>
