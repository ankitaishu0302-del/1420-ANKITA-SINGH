<?php
$message = "Data saved successfully!";
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        #toast {
            visibility: hidden;
            min-width: 250px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            padding: 10px;
            position: fixed;
            bottom: 30px;
            right: 30px;
        }

        #toast.show {
            visibility: visible;
        }
    </style>
</head>
<body>

<div id="toast"><?php echo $message; ?></div>

<script>
function showToast() {
    var x = document.getElementById("toast");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

// Call toast automatically
showToast();
</script>

</body>
</html>
