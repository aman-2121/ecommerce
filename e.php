<?php
$servername = "localhost"; // Database server name
$username = "root";        // MySQL username
$password = "";            // MySQL password (leave empty if no password is set)
$dbname = "myDB";          // Name of the database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error, 3, "/path/to/error.log");
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully!<br>";

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    error_log("Error creating table: " . $conn->error, 3, "/path/to/error.log");
    echo "Error creating table: " . $conn->error;
}

// Close the connection
$conn->close();
?>