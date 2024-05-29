<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patient histroy";

// Create connection
$database = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}
?>
