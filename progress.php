<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Progress Bar Example</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

<h2>Progress Bar using PHP print</h2>

<?php
// Dynamic progress value (can come from DB, calculation, etc.)
$progress = 70; // percentage

// Decide color based on progress
if ($progress < 30) {
    $color = "bg-danger";
} elseif ($progress < 70) {
    $color = "bg-warning";
} else {
    $color = "bg-success";
}

// Print progress bar
print '
<div class="progress" style="height: 30px;">
    <div class="progress-bar '.$color.'" 
        role="progressbar" 
        style="width: '.$progress.'%;" 
        aria-valuenow="'.$progress.'" 
        aria-valuemin="0" 
        aria-valuemax="100">
        '.$progress.'%
    </div>
</div>
';
?>

</body>
</html>