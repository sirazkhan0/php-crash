<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "siraz";

try {
    $con = new mysqli($servername, $username, $password, $database);

    if ($con->connect_error) {
        throw new Exception("Connection failed: " . $con->connect_error);
    }

    echo "Connected successfully";
} catch (Exception $e) {
    echo "Connection error: " . $e->getMessage();
}
?>
