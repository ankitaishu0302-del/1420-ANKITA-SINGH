<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toast with PHP print</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

<h2>PHP Toast Example (Using print)</h2>

<?php
// Dynamic values
$title = "Success";
$message = "Your data has been saved!";
$time = "Now";

// Print Toast UI
print '
<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="myToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
        
        <div class="toast-header">
            <strong class="me-auto">'.$title.'</strong>
            <small>'.$time.'</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
        </div>
        
        <div class="toast-body">
            '.$message.'
        </div>

    </div>
</div>

<button class="btn btn-primary" onclick="showToast()">Show Toast</button>
';
?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Function to show toast
function showToast() {
    var toastElement = document.getElementById("myToast");
    var toast = new bootstrap.Toast(toastElement);
    toast.show();
}
</script>

</body>
</html>