<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Popover with print in PHP</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

<?php
// Dynamic values
$title = "Popover Title";
$content = "This content is printed using PHP print statement!";

// Print button with popover
print '
<button 
    type="button" 
    class="btn btn-success"
    data-bs-toggle="popover"
    data-bs-title="'.$title.'"
    data-bs-content="'.$content.'">
    Click for Popover
</button>
';
?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Initialize popovers
document.addEventListener("DOMContentLoaded", function () {
    var popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
    popoverTriggerList.forEach(function (el) {
        new bootstrap.Popover(el);
    });
});
</script>

</body>
</html>