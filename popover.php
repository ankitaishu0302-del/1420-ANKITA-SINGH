<?php
echo '
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="text-center mt-5">

<button type="button" class="btn btn-primary"
        data-bs-toggle="popover"
        title="Info"
        data-bs-content="This is a simple popover example in PHP">
    Click Me
</button>

<script>
var popoverTriggerList = [].slice.call(document.querySelectorAll("[data-bs-toggle=popover]"));
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
});
</script>

</body>
</html>
';
?>