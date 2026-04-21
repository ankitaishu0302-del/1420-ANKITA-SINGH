<?php

$mobile = "9876543210";

if (preg_match("/^[0-9]{10}$/U", $mobile)) {
    echo "Valid mobile number";
} else {
    echo "Invalid mobile number";
}

?>
-