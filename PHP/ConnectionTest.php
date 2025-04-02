<?php
// Connection testing
$conn = mysqli_connect("localhost", "root", "California123!");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection is well established<br>";
}

// Creating database
$sql = "CREATE DATABASE IF NOT EXISTS auca";
if (mysqli_query($conn, $sql)) {
    echo "Database auca created successfully<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}

// Selecting the database
mysqli_select_db($conn, "auca");

// Creating table
$sql = "CREATE TABLE IF NOT EXISTS Persons (
    FirstName CHAR(30),
    LastName CHAR(30),
    Age INT
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Persons created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// Inserting values
$sql = "INSERT INTO Persons (FirstName, LastName, Age) VALUES 
        ('Petero', 'John', 35),
        ('Gabiro', 'Fred', 33)";

if (mysqli_query($conn, $sql)) {
    echo "Records inserted successfully<br>";
} else {
    echo "Error inserting records: " . mysqli_error($conn) . "<br>";
}

// Closing connection
mysqli_close($conn);
?>
