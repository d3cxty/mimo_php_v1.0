<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "mimo_db_v1.0";

// Attempt to connect to MySQL database
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

// Check the connection
if ($conn) {
    echo "Connected successfully";
} else {
    die("Connection failed: " . mysqli_connect_error());
}
?>
