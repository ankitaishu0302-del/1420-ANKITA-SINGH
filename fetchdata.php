<?php

$conn = new mysqli("localhost", "root", "", "mydb");

$result = $conn->query("SELECT * FROM users");

while ($row = $result->fetch_assoc()) {
    echo $row['id'] . " - " . $row['name'] . " - " . $row['email'] . "<br>";
}

$conn->close();

?>