<?php
// Initialize MySQLi
$con = mysqli_init();

// Set SSL parameters (path to your CA certificate)
$ca_cert = "ssl/DigiCertGlobalRootCA.crt.pem";
mysqli_ssl_set($con, NULL, NULL, $ca_cert, NULL, NULL);

// Attempt to connect to the database
$host = "researchdeltatrack-server.mysql.database.azure.com";
$username = "ptakpgxnfx";
$password = "CY9Qw1yWniTG$7$k"; 
$db_name = "countrydata"; 

// Establish the connection
if (!mysqli_real_connect($con, $host, $username, $password, $db_name, 3306, NULL, MYSQLI_CLIENT_SSL)) {
    // Connection failed, output error
    die('Connection error: ' . mysqli_connect_error());
}

// If connected successfully, you can proceed with your queries
echo "Connected successfully to the database.";

// Remember to close the connection when done
mysqli_close($con);
?>