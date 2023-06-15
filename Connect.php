<?php
// Database configuration
$host = 'localhost'; // Hostname
$username = 'root'; // Database username
$password = ''; // Database password
$database = 'acos'; // Database name

// Create a new MySQLi instance
$mysqli = new mysqli($host, $username, $password, $database);

// Check the connection
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

// Connection successful
echo 'Connected to the database successfully!';

// Close the connection when done
$mysqli->close();
?>
