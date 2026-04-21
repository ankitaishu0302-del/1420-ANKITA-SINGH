<?php

if ($_POST) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user == "admin" && $pass == "1234") {
        echo "Login successful!";
    } else {
        echo "Invalid username or password";
    }
}

?>

<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>