<?php

$servername = "localhost"; // Or your database host
$username = "root";
$password = "";
$dbname = "todo_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// No closing PHP tag needed at the end of this file