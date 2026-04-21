<?php
echo '
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="text-center mt-5">

<button class="btn btn-success"
        data-bs-toggle="popover"
        title="Message"
        data-bs-content="Hello! This is Popover 1 example in PHP">
    Hover / Click Me
</button>

<script>
var popoverTriggerList = [].slice.call(document.querySelectorAll("[data-bs-toggle=popover]"));
popoverTriggerList.forEach(function (el) {
    new bootstrap.Popover(el);
});
</script>

</body>
</html>
';
?>