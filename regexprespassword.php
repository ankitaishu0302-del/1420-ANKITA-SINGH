<?php

$password = "Abc@12345";

if (preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@#$%^&+=]).{6,}$/", $password)) {
    echo "Strong password";
} else {
    echo "Weak password";
}

?>