<?php
session_start();

// Generate simple symbol captcha
$symbols = ['@', '#', '$', '%', '&', '*'];
$captcha = $symbols[array_rand($symbols)] . rand(1, 9);

$_SESSION['captcha'] = $captcha;

if ($_POST) {
    if ($_POST['captcha'] == $_SESSION['captcha']) {
        echo "CAPTCHA verified successfully";
    } else {
        echo "Incorrect CAPTCHA";
    }
}
?>

<form method="post">
    Enter CAPTCHA: <b><?php echo $_SESSION['captcha']; ?></b><br><br>
    <input type="text" name="captcha"><br><br>
    <input type="submit" value="Verify">
</form>