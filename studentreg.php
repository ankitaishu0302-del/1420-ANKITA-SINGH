<?php

if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    echo "Student Registered Successfully!<br>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Course: " . htmlspecialchars($course);
}

?>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Course: <input type="text" name="course"><br><br>
    <input type="submit" value="Register">
</form>