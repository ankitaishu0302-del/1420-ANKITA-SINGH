<?php

$conn = new mysqli("localhost", "root", "", "");

// Create database
$conn->query("CREATE DATABASE mydb");

// Select database
$conn->select_db("mydb");

// Create table
$conn->query("CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50)
)");

echo "Database and table created.";

$conn->close();

?>