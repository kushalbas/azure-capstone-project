<?php
// db_connection.php

$servername = "researchdeltatrack-server.mysql.database.azure.com";
$username = "ptakpgxnfx";
$password = "CY9Qw1yWniTG$7$k";
$database = "countrydata";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
