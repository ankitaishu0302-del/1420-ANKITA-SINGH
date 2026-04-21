<?php
session_start();

if ($_POST) {
    $userCaptcha = $_POST['captcha'];

    if ($userCaptcha == $_SESSION['captcha']) {
        echo "CAPTCHA Verified Successfully";
    } else {
        echo "CAPTCHA Not Matched";
    }
}
?>

<form method="post">
    Enter CAPTCHA: <b><?php echo $_SESSION['captcha']; ?></b><br><br>
    <input type="text" name="captcha"><br><br>
    <input type="submit" value="Verify">
</form>