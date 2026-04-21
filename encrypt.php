<?php

$password = "mypassword";

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

echo $hashedPassword;

?>