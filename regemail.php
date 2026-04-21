<?php

if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "Registered Successfully!<br>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email);
}

?>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    <input type="submit" value="Register">
</form>