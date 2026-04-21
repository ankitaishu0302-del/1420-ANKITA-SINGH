<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tooltip with PHP print</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

<h2>Tooltip Example (Using PHP print)</h2>

<?php
// Dynamic tooltip text
$tooltip = "This is a tooltip message!";
$buttonText = "Hover over me";

// Print button with tooltip
print '
<button 
    type="button" 
    class="btn btn-info"
    data-bs-toggle="tooltip"
    data-bs-placement="top"
    title="'.$tooltip.'">
    '.$buttonText.'
</button>
';
?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Initialize tooltips
document.addEventListener("DOMContentLoaded", function () {
    var tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipTriggerList.forEach(function (el) {
        new bootstrap.Tooltip(el);
    });
});
</script>

</body>
</html>